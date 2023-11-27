<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ URL::asset('css/view.css') }}" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
        <nav>
            <div class="nav-sp">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Join</a></li>
                    <li><a href="#">Faq</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
            <h1>{{$stelling->title}}</h1>
            <article>{{$stelling->beschrijving}}</article>
            
            <h2>Opties</h2>
            <ul>
                <form action="" method="get">
                    @csrf
                    <div class="form-qs">
                        @forelse ($stelling->opties as $optie)
                        <li><input type="radio">{{$optie->optie}}</li>
                        @empty
                        <li>Geen opties beschikbaar</li>
                        
                        @endforelse
                        
                    </div>
                    <p>Ga akkoord met onze <a href="">Algemenen voorwaarden</a>.  Door Akkoord te gaan met onze voorwaarden kunt u uw 'Stem' uitbrengen</p>
                    
                </form>
            </ul>
        </main>
    </div>
    
    
    
</body>
</html>