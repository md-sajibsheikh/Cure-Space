@extends('admin')

@section('main-content')

<div class=" mt-6">
    <table class="min-w-full  bg-white border border-gray-300">
        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-purple-600  text-white p-2 text-center rounded-t-lg">All Blogs</h1>

        <thead>
            <tr class="bg-gray-100 text-center text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Image</th>
                <th class="py-3 px-6 text-left">Date</th>
                <th class="py-3 px-6 text-left">Title</th>
                <th class="py-3 px-6 text-left">Sub-title</th>
                <th class="py-3 px-6 text-left">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach($blogs as $blog)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">
                    <img src="{{ asset($blog->img) }}" alt="Blog Image" class="w-16 h-16 object-cover rounded"> <!-- এখানে সঠিক পাথ ব্যবহার করা হয়েছে -->
                </td>
                <td class="py-3 px-6 text-left">{{$blog->date}}</td>
                <td class="py-3 px-6 text-left">{{$blog->title}}</td>
                <td class="py-3 px-6 text-left">{{$blog->subtitle}}</td>
                <td class="py-3 px-6 text-left">
                    <a href="{{ route('edit-blog',$blog->id)}}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

                    <a href="{{route('blog-delete',$blog->id)}}" type="submit" class="text-red-500 hover:text-red-700">Delete</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection