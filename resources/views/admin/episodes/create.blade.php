<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Episode') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-4 text-gray-500">
                        <form action="" method="post">
                            @csrf

                            <div>
                                <x-jet-label class="font-bold ml-1 text-base" for="text" value="{{ __('Title') }}" />
                                <x-jet-input id="title" class="block mt-1 w-full" type="title" name="title"
                                    :value="old('title')" required autofocus />
                            </div>

                            <div class="mt-6">
                                <x-jet-label class="font-bold ml-1 text-base" for="text" value="{{ __('Body') }}" />
                                <textarea name="body" id="body" class="w-full form-input rounded-md shadow-sm mt-1"
                                    cols="30" rows="10"></textarea>
                            </div>

                            <div class="mt-6">
                                <x-jet-label class="font-bold ml-1 text-base" for="url" value="{{ __('Video URL') }}" />
                                <x-jet-input id="video_url" class="block mt-1 w-full" type="video_url" name="video_url"
                                    :value="old('video_url')" required autofocus />
                            </div>

                            <div class="mt-6">
                                <x-jet-label class="font-bold ml-1 text-base" for="url" value="{{ __('Audio URL') }}" />
                                <x-jet-input id="audio_url" class="block mt-1 w-full" type="audio_url" name="audio_url"
                                    :value="old('audio_url')" required autofocus />
                            </div>

                            <div class="mt-6">
                                <x-jet-button class="inline-block bg-teal-700 hover:bg-teal-500">
                                    {{ __('Submit') }}
                                </x-jet-button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('/vendor/ckeditor5-build-classic/ckeditor.js') }}"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#body'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </x-slot>
</x-app-layout>