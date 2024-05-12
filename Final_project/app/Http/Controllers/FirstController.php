<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\GameGenresGames;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Orders;
use App\Models\pouzivatel;
use App\Models\Reviews;
Use App\Models\GameGenres;
use App\Models\Platforms;
use App\Models\platformsgames;
use Error;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use DateTime;


use function PHPUnit\Framework\isEmpty;

class FirstController extends Controller
{
    private function isAdmin()
    {
        if (Session::has('user_id')) {
            $user = pouzivatel::where('id', Session::get('user_id'))->first();
            Log::error($user);
            return $user && $user->type === 'admin';
        }
        return false;
    }
    public function homepage()
    {
        $latestGames = Item::orderBy('release_date', 'desc')->take(9)->get();

        $bestSellingGames = Item::orderBy('download_count', 'desc')->take(9)->get();

        $megaDiscountGames = Item::where('discount', '>', 0) 
                                ->orderBy('discount', 'desc')->take(9)->get();

        $genres = GameGenres::all();

        $platforms = Platforms::all();
        return view('homepage', compact('latestGames', 'bestSellingGames', 'megaDiscountGames', 'genres', 'platforms'));
    }

    public function adminpanel()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();
        return view('admin_panel', compact('genres', 'platforms'));
    }

    public function additem()
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();

        return view('add_item', compact('genres', 'platforms'));
    }

    public function regiter_panel()
    {   
        if (Session::has('user_id')) {
            return redirect()->intended('/');
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();

        return view('register_panel', compact('genres', 'platforms'));
    }

    public function account()
    {
        if (Session::has('user_id')) {
            $genres = GameGenres::all();
            $platforms = Platforms::all();
            $purchasedOrders = Orders::where('account_ID', Session::get('user_id'))
                                        ->where('state', 'purchased')
                                        ->get();
        
            $purchasedGames = [];
            foreach ($purchasedOrders as $order) {
                $game = Item::find($order->game_id);
                if ($game) {
                    $purchasedGames[] = $game;
                }   
            }
            return view('account/my_orders_panel', compact('genres', 'platforms', 'purchasedGames'));
        }

        return redirect()->intended('/login') ;
    }

    public function login()
    {
        if (Session::has('user_id')) {
            return redirect()->intended('/');
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();
        return view('login_panel', compact('genres', 'platforms'));
    }
    
    public function edititems()
    {
        $games = Item::all(); 
        $platforms = Platforms::all();
        $genres = GameGenres::all();
        return view('edit_items', compact('games', 'platforms', 'genres'));  
    }

    public function logout(Request $request)
    {
        if (Session::has('user_id')) {
            Session::forget('user_id');

        Session::flush();
        }
        return redirect()->intended('/');
    }

    public function additem_post(Request $request)
    {

        $data = $request->only('name', 'description', 'price', 'discount', 'key_amount', 'developer', 'release_date', 'video_link');
        $genres = $request->input('genres', []);

        $platforms = $request->input('platforms', []);


        $game = Item::create($data);

        foreach ($genres as $genreId) {
            GameGenresGames::create([
                'game_ID' => $game->id,
                'genre_ID' => $genreId
            ]);
        }

        foreach ($platforms as $platformId) {
            platformsgames::create([
                'game_id' => $game->id,
                'platform_id' => $platformId
            ]);
        }



        if ($request->hasFile('images')) {
            $images = $request->file('images');

            $folderName = preg_replace('/[^A-Za-z0-9\-]/', '', $game->name); // Odstránenie nežiadúcich znakov z názvu hry
            $folderPath = public_path('images/games/' . $folderName);
            File::makeDirectory($folderPath, 0777, true, true); // Vytvorenie adresára
    
            $count = 1;
            foreach ($images as $image) {
                $filename = $count++ . '.' . $image->getClientOriginalExtension(); // Súbor s postupným číslovaním
                $image->move($folderPath, $filename);
            }
        }

        return redirect()->intended('/adminpanel');
    }

    public function deleteitem($id)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }
        $folderName = preg_replace('/[^A-Za-z0-9\-]/', '', item::findOrFail($id)->name);

        // Cesta k priečinku
        $folderPath = public_path('images/games/' . $folderName);

        // Overenie, či priečinok existuje, a jeho vymazanie
        if (File::isDirectory($folderPath)) {
            File::deleteDirectory($folderPath);
        }

        GameGenresGames::where('game_ID', $id)->delete();
        Reviews::where('game_ID', $id)->delete();
        Orders::where('game_id', $id)->delete();
        platformsgames::where('game_id', $id)->delete();
        Item::findOrFail($id)->delete();

        return redirect('/adminpanel/editgame')->with('status', 'Item was deleted successfully!');
    }

    // Metóda editItem v kontrolovi
    public function editItem($id)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }
        $game = Item::findOrFail($id);
        $genres = GameGenres::all();
        $platforms = Platforms::all();

        // Získanie priradených žánrov a platforiem
        $assignedGenreIds = GameGenresGames::where('game_ID', $id)->pluck('genre_ID');
        $assignedPlatformIds = platformsgames::where('game_id', $id)->pluck('platform_id');

        $releaseDate = new DateTime($game->release_date);
        $formattedDate = $releaseDate->format('Y-m-d');

        return view('edit_item', compact('game', 'genres', 'platforms', 'assignedGenreIds', 'assignedPlatformIds', 'formattedDate'));
    }


    public function processGameForm(Request $request)
    {
        if (!$this->isAdmin()) {
            return redirect('/');
        }
        $gameId = $request->input('game_id');
        $game = Item::findOrFail($gameId);

        $data = $request->except('id');

        $game->update($data);


        $folderName = preg_replace('/[^A-Za-z0-9\-]/', '', $game ->name);

        $folderPath = public_path('images/games/' . $folderName);

        // Overenie, či priečinok existuje, a jeho vymazanie
        if (File::isDirectory($folderPath)) {
            File::deleteDirectory($folderPath);
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');

            $folderName = preg_replace('/[^A-Za-z0-9\-]/', '', $game->name); // Odstránenie nežiadúcich znakov z názvu hry
            $folderPath = public_path('images/games/' . $folderName);
            File::makeDirectory($folderPath, 0777, true, true); // Vytvorenie adresára
    
            $count = 1;
            foreach ($images as $image) {
                $filename = $count++ . '.' . $image->getClientOriginalExtension(); // Súbor s postupným číslovaním
                $image->move($folderPath, $filename);
            }
        }


        return redirect('/adminpanel/editgame')->with('status', 'Data processed successfully!');
    }

    public function loginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
        if ($validator->fails()) {
            return redirect('login')
                        ->withErrors($validator)
                        ->withInput();
        }
        $user = pouzivatel::where('email', $request->email)->first();

        if ($user && $request->password == $user->password) {
            Session::put('user_id', $user->id);
            return redirect('/')->with('status', 'Login successful');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:CustomerAccounts',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = pouzivatel::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        Auth::login($user);

        Session::put('user_id', $user->id);

        return redirect('/')->with('status', 'Register succesfull');
    }

    public function gamedetail($gameId){
        $game = Item::findOrFail($gameId);
       
        $game->discountedPrice = $game->price - ($game->price * ($game->discount / 100)); 
        $reviews = Reviews::where('game_ID', $gameId)->get();
        
        $genreIDs = GameGenresGames::where('game_ID', $gameId)->pluck('genre_ID');
        $genres = GameGenres::whereIn('id', $genreIDs)->pluck('name');
        $game->genres = $genres;

        if ($reviews->isEmpty()) {
            $game->averageRating = 0;
        } else {
            $game->averageRating = $reviews->avg('rating'); 
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();  
        return view('game/game_details', compact('game', 'reviews', 'genres', 'platforms')); 
    }
    
    public function addToCart($itemId)
    {

        if (Session::has('user_id')) {

            Orders::create([
                "state" => "active",
                "account_ID" => Session::get("user_id"),
                "game_id" => $itemId,
                "delivery_ID" => NULL
            ]);
        }
        else {
            $cart = session()->get('cart', []);
            if(isset($cart[$itemId])) {
                $cart[$itemId]['quantity']++;
            } else {
                $cart[$itemId] = [
                    "quantity" => 1,
                ];
            }
            session()->put('cart', $cart);
        }
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $itemsArray = [];
        $totalprice = 0;
        if (Session::has('user_id')) {
            $userId = Session::get('user_id');
            $orders = Orders::where('account_ID', $userId)
                            ->where('state', 'active')
                            ->select('game_id', DB::raw('count(*) as quantity'))
                            ->groupBy('game_id')
                            ->get();
        
            foreach ($orders as $order) {
                $product = Item::find($order->game_id);
                if ($product) {
                    $product->quantity = $order->quantity;
                    $product->onegametotal = ($product->price - ($product->price * ($product->discount / 100))) * $order->quantity;
                    $totalprice += $product->onegametotal;
                    $itemsArray[] = $product;
                }
            }
        } else {
            if (Session::has('cart') && !empty(Session::get('cart'))) {
                foreach (Session::get('cart') as $product_id => $item) {
                    $product = Item::find($product_id);

                    if ($product) {
                        $product->quantity = $item['quantity'];
                        $product->onegametotal = ($product->price - ($product->price * ($product->discount / 100))) * $item['quantity'];
                        $totalprice += $product->onegametotal;
                        $itemsArray[] = $product;
                    }
                }
            }
        }
        $genres = GameGenres::all();
        $platforms = Platforms::all();
        return view('cart/cart_list_summary', ['itemsArray' => $itemsArray, 'total' => $totalprice, 'genres' => $genres, 'platforms' => $platforms]);
    }


    public function updateItemInCart(Request $request, $itemId)
    {
        $newQuantity = $request->input('quantity');
        $newQuantity = $request->input('quantity');
        if (Session::has('user_id')) {
            $userId = Session::get('user_id');
            $orders = Orders::where('account_ID', $userId)
                        ->where('game_id', $itemId)
                        ->where('state', 'active')
                        ->get();

            $currentQuantity = $orders->count();

            if ($newQuantity < $currentQuantity) {
                // Potrebné znížiť počet položiek
                $ordersToCancel = $orders->take($currentQuantity - $newQuantity);
                foreach ($ordersToCancel as $order) {
                    $order->update(['state' => 'canceled']);
                }
            } else if ($newQuantity > $currentQuantity) {
                // Potrebné pridať viac položiek
                $additionalItems = $newQuantity - $currentQuantity;
                for ($i = 0; $i < $additionalItems; $i++) {
                    Orders::create([
                        "state" => "active",
                        "account_ID" => $userId,
                        "game_id" => $itemId,
                        "delivery_ID" => NULL
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Množstvo položky bolo úspešne aktualizované.');
        } else {
            $cart = session()->get('cart', []);

            if (isset($cart[$itemId])) {
                $cart[$itemId]['quantity'] = $newQuantity;

                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Množstvo položky bolo úspešne aktualizované.');
            }
        }
        return redirect()->back()->with('error', 'Položka sa nenašla v košíku.');
    }

    public function removeItemFromCart($itemId)
    {
        if (Session::has('user_id')) {
            $userId = Session::get('user_id');

            $activeOrders = Orders::where('account_ID', $userId)
                                  ->where('game_id', $itemId)
                                  ->where('state', 'active')
                                  ->get();
    
            foreach ($activeOrders as $order) {
                $order->update(['state' => 'canceled']);
            }
    
            return redirect()->back()->with('success', 'Všetky aktívne položky boli úspešne odstránené z košíka a ich stav bol zmenený na zrušený.');
        } else {
            $cart = session()->get('cart', []);

            if (isset($cart[$itemId])) {
                unset($cart[$itemId]);  
                session()->put('cart', $cart); 
                return redirect()->back()->with('success', 'Položka bola úspešne odstránená z košíka.');
            }
        }
        return redirect()->back()->with('error', 'Položka sa nenašla v košíku.');
        }

    public function test()
    {
        $itemsArray = [];
        foreach (Session::get('cart') as $product_id => $item) {
            $product = Item::find($product_id);
        
            if ($product) {
                $product->quantity = $item['quantity'];
                $itemsArray[] = $product;
            }
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function searchGamesByGenres(Request $request)
    {
        $genresF = $request->input('genres', []);
        $sort = $request->input('sort', 'default');
        $minPrice = $request->input('priceMin', null);
        $maxPrice = $request->input('priceMax', null);
        $platformsF = $request->input('platform', []);
        $page = $request->input('page', 1);
        $itemsPerPage = 21;

        $text = $request->input('text', '');
        

        $gameid = [];
        
        foreach ($genresF as $genre) {
            $games = GameGenresGames::where('genre_ID', $genre)->pluck('game_ID')->unique()->toArray();
            $gameid = array_merge($gameid, $games);
        }

        foreach ($platformsF as $platform) {
            $games = PlatformsGames::where('platform_id', $platform)->pluck('game_id')->unique()->toArray();
            $gameid = array_merge($gameid, $games);
        }
        $gameid = array_unique($gameid);

        $query = Item::whereIn('id', $gameid)->selectRaw('id, name, price, discount, description, developer, release_date, video_link, download_count, price - (price * discount / 100) as final_price');

        if ($minPrice !== null) {
            $query->whereRaw('price - (price * discount / 100) >= ?', [$minPrice]);
        }
        if ($maxPrice !== null) {
            $query->whereRaw('price - (price * discount / 100) <= ?', [$maxPrice]);
        }

        if (empty($gameid) && $text != '') {
            $query = Item::whereRaw('name ILIKE ?', ['%' . $text . '%'])
            ->orWhereRaw('description ILIKE ?', ['%' . $text . '%']);
        }

        switch ($sort) {
            case 'cheapest':
                $query->orderByRaw('price - (price * discount / 100) ASC');
                break;
            case 'mostExpensive':
                $query->orderByRaw('price - (price * discount / 100) DESC');
                break;
            case 'theLatest':
                $query->orderBy('release_date', 'desc');
                break;
            default:
                $query->orderBy('download_count', 'desc'); 
                break;
        }

        
        $totalItems = $query->get()->count();
        $totalPages = ceil($totalItems / $itemsPerPage);

        $games = $query->paginate($itemsPerPage, ['*'], 'page', $page);

        if ($totalPages == 1){
            $totalPages = 0;
        }
        // Retrieve all genres to display filters
        $genres = GameGenres::all();

        $platforms = Platforms::all();
        
        // Return the view with the games, genres, and platforms
        return view('fitredGames', compact('games', 'genres', 'platforms', 'totalPages'));
    }


    public function setShipping(){

        $genres = GameGenres::all(); 
        $platforms = Platforms::all();
  
        return view('cart/shipping', compact('genres', 'platforms'));
    }

    public function sumbmitShipping(Request $request){
        $itemsArray = [];
        $totalpricewithd = 0;
        $totalpricewithoutd = 0;
        if (Session::has('user_id')) {
            $userId = Session::get('user_id');
            $orders = Orders::where('account_ID', $userId)
                            ->where('state', 'active')
                            ->get();
        
            foreach ($orders as $order) {
                $product = Item::find($order->game_id);
                if ($product) {
                    $totalpricewithd += $product->price - ($product->price * ($product->discount / 100));
                    $totalpricewithoutd += $product->price;
                }
                }
            }
            else {
                if (Session::has('cart') && !empty(Session::get('cart'))) {
                    foreach (Session::get('cart') as $product_id => $item) {
                        $product = Item::find($product_id);
        
                        if ($product) {
                            $totalpricewithd += $product->price - ($product->price * ($product->discount / 100));
                            $totalpricewithoutd += $product->price;
                        }
                    }
                }
            }

            $genres = GameGenres::all();
            $platforms = Platforms::all();
            $saved = $totalpricewithoutd - $totalpricewithd;
            return view('cart/payment_sum', compact('genres', 'platforms', 'totalpricewithoutd', 'saved', 'totalpricewithd'));    
        }

        public function paymentProcess(Request $request) {
            $genres = GameGenres::all();
            $platforms = Platforms::all();

            return view('cart/paymentDetails', compact('genres', 'platforms'));
        }

        public function payProcess(Request $request) {
            if (Session::has('user_id')) {
                $userId = Session::get('user_id');
                Orders::where('account_ID', $userId)
                      ->where('state', 'active')
                      ->update(['state' => 'purchased']);
            } else {
                Session::forget('cart');
            }
            return redirect('/'); 
        }
}
