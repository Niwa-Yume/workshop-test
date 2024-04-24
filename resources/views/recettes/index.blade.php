<x-app>
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
                    @foreach($recettes as $recette)
                    <tr class="bg-gray-200 border-b-2">
                        <td>{{ $recette->titre }}</td>
                        <td>{{ $recette->description }}</td>
                        <td>{{ $recette->difficulte }}</td>
                        <td>{{ $recette->temps_preparation }}</td>
                        <td class="table-action">
                            <a href="{{ route('recette.edit', $recette->id) }}">
                                {{ __('Modifier') }}
                            </a>
                            <form action="{{ route('recette.destroy', $recette->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete">
                                    {{ __('Supprimer') }}
                                </button>
                            </form>
                            <a href="{{ route('recette.show', $recette->id) }}" class="show">
                                {{ __('Afficher') }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="bg-blue-200 w-52 rounded-md text-center mt-4 py-1 font-bold">
                <a href="{{ route('recette.create') }}">
                    {{ __('Ajouter une recette') }}
                </a>
            </div>
        </div>
    </x-app>
    