<div class="tweet-box ">
    <form action="/tweet" method="post">
        @csrf
        <textarea
            name="body"
            cols="30"
            rows="3"
            class="w-full"
            style="resize: none"
            placeholder="What is in your mind"
            required
            autofocus



        ></textarea>
        <hr class="mb-4">
        <div class="tweet-box-footer flex justify-between pb-4">
            <div class="tweet-box-img ml-6 " style="background-image: url('{{asset('storage').'/'.auth()->user()->avatar}}')">

            </div>



            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full  mr-4">
                Tweet
            </button>
        </div>
        @error('body')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mx-5 my-3" role="alert">
            {{ $message }}
        </div>
        @enderror
    </form>
</div>
