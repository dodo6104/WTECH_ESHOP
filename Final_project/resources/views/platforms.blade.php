<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .PlatformMenu {
            position: absolute;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: auto auto auto;
            border-radius: 0px 0px 20px 20px;
            background-color: #003366dc;
            z-index: 5;
            padding: 20px;
            width: 800px
        }

        .AllSections {
            display: grid;
            grid-gap: 20px;
        }

        .OptionsForPlatforms {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .platform-button {
          padding: 15px 30px;
          border: none;
          border-radius: 5px;
          background-color: #337ab7;
          color: white;
          font-size: 18px;
          cursor: pointer;
          transition: background-color 0.3s ease;
        }

        .platform-button:hover, .platform-button.active {
            background-color: #286090;
        }

        .platform-button.active {
            background-color: black;
        }

        .SearchButtonPlatform {
            padding: 15px 30px;
            margin-top: 20px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #008CBA;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .SearchButtonPlatform:hover {
            background-color: #007B9A;
        }
    </style>
</head>
<body>
    <div class="PlatformMenu">
      <form id="platformForm" action="/search" method="GET">
          <div class="AllSections">
              <section>
                  <div class="OptionsForPlatforms">
                      @foreach ($platforms as $platform)
                          <button type="button" class="platform-button" onclick="toggleActive(this)" data-platform-id="{{ $platform->id }}">{{ $platform->name }}</button>
                      @endforeach
                  </div>
              </section>
          </div>
          <button type="button" class="SearchButtonPlatform" onclick="submitForm()">Search</button>
      </form>
    </div>

    <script>
        function toggleActive(element) {
            element.classList.toggle('active');
        }

        function submitForm() {
            const activePlatforms = document.querySelectorAll('.platform-button.active');
            const platformForm = document.getElementById('platformForm');
            const inputContainer = document.createElement('div');

            activePlatforms.forEach(btn => {
                const hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'platform[]';
                hiddenInput.value = btn.getAttribute('data-platform-id');
                inputContainer.appendChild(hiddenInput);
            });

            platformForm.appendChild(inputContainer);
            platformForm.submit();
        }
    </script>
</body>
</html>
