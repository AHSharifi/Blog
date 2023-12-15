<head>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        td {
            color: #fff;
        }

        form {
            margin: 0;
        }
    </style>
</head>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('News List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="display: flex; justify-content: center; flex-direction: column">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <td style="width: 40px" class="text-center">Id</td>
                            <td style="width: 250px">Title</td>
                            <td>Text</td>
                            <td style="width: 150px;">Action</td>
                        </thead>
                        <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td class="text-center" style=""> {{ $item->id }} </td>
                                <td> {{ $item->title }} </td>
                                <td> {{ $item->text }} </td>
                                <td style="display: flex; flex-direction: row">
                                    <form action="{{ route('edit' , ['news' => $item->id]) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-success" style="margin-right: 10px">Edit</button>
                                    </form>
                                    <form action="{{ route('delete' , ['news' => $item->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div
                        style="
            width: 100%;
            display: flex;
            justify-content: center;
        ">
                        <div> {{ $news->links() }} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
