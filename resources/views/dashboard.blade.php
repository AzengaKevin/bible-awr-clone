<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-8 text-2xl">
                        Welcome to {{ config('app.name', 'Bible Study Application') }}
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p>Think of this as a master class in Bible study and Bible prophecy. Whether you’ve never before cracked open a Bible, or have been studying it all your life, you’ll gain new insights from this series!</p>
                        <p class="mt-6">By looking at Revelation and Daniel, as well as other books of the Bible, you’ll find that the Bible itself clearly unlocks the mysteries of Bible prophecies. This will transform what may feel like a confusing book into something clear and understandable. In fact, after this course, Revelation may become one of your favorite books of the Bible!</p>
                        <p class="mt-6">Above all, you’ll gain a deeper understanding of Jesus’ love for you, and emerge with an even closer relationship with Him.</p>
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                </div>

            </div>
        </div>
    </div>

    <x-slot name="scripts"></x-slot>
    
</x-app-layout>