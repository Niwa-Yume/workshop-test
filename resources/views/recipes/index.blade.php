
@extends('layouts.base')

@section('content')

    <div class="flex flex-col items-center">
        <table class="table table-striped table-centered">
            <thead>
                <tr>
                    <th>{{ __('Titre') }}</th>
                    <th>{{ __('Description') }}</th>
                    <th>{{ __('Difficulté') }}</th>
                    <th>{{ __('Temps de préparation') }}</th>
                    <th>{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recipes as $recipe)
                <tr class="bg-gray-200 border-b-2">
                    <td>{{ $recipe->titre }}</td>
                    <td>{{ $recipe->description }}</td>
                    <td>{{ $recipe->difficulte }}</td>
                    <td>{{ $recipe->temps_preparation }}</td>
                    <td class="table-action">
                        <a href="{{ route('recipe.edit', $recipe->id) }}">
                            {{ __('Modifier') }}
                        </a>
                        <form action="{{ route('recipe.destroy', $recipe->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete">
                                {{ __('Supprimer') }}
                            </button>
                        </form>
                        <a href="{{ route('recipe.show', $recipe->id) }}" class="show">
                            {{ __('Afficher') }}
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bg-blue-200 w-52 rounded-md text-center mt-4 py-1 font-bold">
            <a href="{{ route('recipe.create') }}">
                {{ __('Ajouter une recette') }}
            </a>
        </div>
    </div>

@endsection
