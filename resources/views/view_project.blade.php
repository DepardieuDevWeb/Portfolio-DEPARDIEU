@extends('base') @section('meta_title', $project->title)
@section('meta_description', $project->meta_description) @section('content')
<section class="viewProject section" id="home">
    <!-- <div class="fill">Projects > Knalson Music</div> -->
    <section class="grid section home__viewProject fade-in-up">
        <div class="app-description">
            <div class="back-link scroll-animate">
                <a href="{{ route('index') }}">
                    <svg
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                        class="arrow-left"
                    >
                        <path
                            d="M4 12H20M4 12L8 8M4 12L8 16"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    <span>Retour en arrière</span></a
                >
            </div>
            <div class="description scroll-animate">
                <h1>{{ $project->title }}</h1>
                @if($project->project_url)
                <a href="{{$project->project_url}}" target="_blank">Visiter le site</a>
                @else
                <a href="{{$project->github_url}}" target="_blank"
                    >Voir le code source</a
                >
                @endif
            </div>

            <div class="tech scroll-animate">
                <h2>Technologies utilisées</h2>
                <div>
                    @foreach($project->technologies as $technology)
                    <div class="badge">{{ $technology->name }}</div>
                    @endforeach
                </div>
            </div>
            <div class="description scroll-animate">
                <p>{!! $project->description !!}</p>
            </div>
            <div class="links scroll-animate">
                @if($project->project_url)
                <a href="{{$project->project_url}}" class="btn visit-site" target="_blank"
                    >Visiter le site</a
                >
                @endif @if($project->github_url)
                <a href="{{$project->github_url}}" class="btn visit-code" target="_blank"
                    >Voir le code source</a
                >
                @endif
            </div>
        </div>
        <div class="image">
            @foreach($project->pictureOrdered as $k => $picture)
            <div
                class="item scroll-animate data-position = {{$picture->position}}"
            >
                <img src="{{ $picture->getImageUrl() }}" alt="" />
            </div>
            @endforeach
        </div>
        <div class="lightbox">
            <button class="close-lightbox">x</button>
            <img src="" alt="" class="lightbox-img" />
        </div>
    </section>
</section>
@endsection
