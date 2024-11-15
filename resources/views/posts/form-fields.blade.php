<div>
    <x-input-label for="title" :value="__('Title')"/>
    <x-text-input 
    id="title" 
    name="title" 
    value="{{old('title', $post->title)}}"
    class="w-full mt-1"/>

    <x-input-error :messages="$errors->get('title')"/>
    </div>
    <div>
        <x-input-label for="body" :value="__('Body')"/>
        <x-textarea 
        name="body" 
        id="body"
        class="w-full mt-1">{{old('body', $post->body)}}</x-textarea>
        <x-input-error :messages="$errors->get('body')"/>
    </div>