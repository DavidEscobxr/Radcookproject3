@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Recipe
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Recipe</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('recipes.update', $recipe->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('recipe.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
