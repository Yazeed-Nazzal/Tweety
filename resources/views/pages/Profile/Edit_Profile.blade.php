<x-app>
   @section('content')
        <div class="w-full max-w-screen-sm mx-auto">
            <form action="/profile/edit/{{$user->username }}"
                  method="post"
                  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Full Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="name"
                           name="name"
                           type="text"
                           required
                           value="{{$user->name}}"
                           placeholder="Full Name">
                </div>
                @error('name')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Eamil
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="email"
                           name="email"
                           type="email"
                           required
                           value="{{$user->email}}"
                           placeholder="Email">
                </div>
                @error('email')
                <span class="text-red-700">{{ $message }}</span>
                @enderror
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="password"
                           name="password"
                           type="password"
                           placeholder="Password">
                </div>
                @error('password')
                <span class="text-red-700">{{ $message }}</span>
                @enderror
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                        Confirm Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="password_confirmation"
                           name="password_confirmation"
                           type="password"
                           placeholder="Confirm Password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="status">
                        Status
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="status"
                        rows="3"
                        cols=""
                    >{{ $user->status }}
                    </textarea>
                </div>
                @error('status')
                <span class="text-red-700">{{ $message }}</span>
                @enderror
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="avatar">
                       Profile Picture
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="avatar"
                           name="avatar"
                           type="file"
                           value="{{$user->name}}"
                           placeholder="Full Name">
                </div>
                @error('avatar')
                <span class="text-red-700">{{ $message }}</span>
                @enderror
                <div class="mb-4 text-right">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                        Edit
                    </button>
                </div>


            </form>
        </div>
   @stop
</x-app>
