@extends('admin')

@section('main-content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-center text-purple-600">Feedback List</h2>

    @if ($feedbacks->isEmpty())
    <p class="text-center text-gray-500">No feedback available.</p>
    @else
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($feedbacks as $feedback)
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <img src="{{ asset($feedback->user_img ?? 'default-avatar.png') }}" class="w-12 h-12 rounded-full mr-3">
                <div>
                    <h3 class="text-lg font-semibold">{{ $feedback->user_name ?? 'Anonymous' }}</h3>
                    <p class="text-sm text-gray-600">{{ $feedback->created_at->format('m d, Y') }}</p>
                </div>
            </div>

            <div class="mb-2">
                <span class="text-yellow-500">
                    @for ($i = 0; $i < $feedback->rating; $i++)
                        &#9733; <!-- Star icon -->
                        @endfor
                </span>
            </div>

            <p class="text-gray-700">{{ $feedback->feedback }}</p>

            <!-- Trash Icon -->
            <a href="{{ route('feedback.destroy', $feedback->id) }}" class="mt-4 ml-60">
                <i class="fas fa-trash-alt text-red-600 hover:text-red-800"></i> 
            </a>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection