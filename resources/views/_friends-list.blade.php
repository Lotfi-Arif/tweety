<div class="bg-gray-200 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (current_user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50" >

                    {{ $user->name }}
                </a>
            </div>
        </li>
        @empty
        <p>No friends yet.</p>
        @endforelse
    </ul>
</div>