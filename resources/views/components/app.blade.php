<x-master>
    <main class="py-4">
        <section class="main-section ">
            <div class="container mx-auto">
                <div class="lg:flex justify-between items-start ">
                    <div class="lg:w-1/6" >@include('layouts.home.SideList')</div>
                    <div class=" lg:flex-1 lg:mx-10" style="max-width: 700px">
                        @yield('content')
                    </div>
                    <div class="friend-list lg:w-1/5 bg-gray-200 p-10 rounded-lg my-10 md:my-0 " >@include('layouts.home.FriendLists')</div>
                </div>
            </div>
        </section>
    </main>
</x-master>
