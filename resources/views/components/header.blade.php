<header>
    <div class="idk">
        <div class="idk-inner">
            <span>
                dc power visa
            </span>
            <span>
                additional dc sites
            </span>
        </div>
    </div>
    <div class="header-container">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="logo">
        <nav>
            <ul>
                @foreach ($navbar_voices as $voice)
                    <li class="{{ $voice == $active_page ? 'active' : '' }}">
                        {{ $voice }}
                    </li>
                @endforeach
            </ul>
        </nav>
        <div class="searchbar">
            <input type="text" name="
        " id="">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>


</header>

<style>
    .idk {
        height: 30px;
        background-color: #0282f9;
        color: white;
    }

    .idk-inner {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 75%;
        margin: 0 auto;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 75%;
        margin: 0 auto;
        color: #514a46;
        font-weight: bolder;
        padding-block: 1em;
    }

    .logo {
        width: 80px;
    }

    ul {
        display: flex;
        list-style-type: none;
        gap: 0.8em;
    }

    li {
        text-transform: uppercase;
    }

    li.active {
        color: #0282f9;
        ;
    }
</style>
