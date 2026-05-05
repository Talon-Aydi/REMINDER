<div class="flex flex-col bg-white h-full rounded-r-2xl p-3 divide-y space-y-3">
    <span class="text-[24px] font-extrabold pt-5 pb-5"> Friendslist </span>
    <div class="flex flex-col space-y-3 p-5">
        @if($friends)
            @foreach ($friends as $friend )
            <livewire:component.bubbles.friend-bubble
                :userName="$friend->name"
                messageContent="Have you read the card?"
                timeStamp="11:00"
                :isFriend="true"
            />
            @endforeach
        @else
            <span class="italic">
                You have no friends
            </span>
        @endif
    </div>
    <div>
        <span class="text-[24px] font-extrabold pt-5 pb-5"> Recommended </span>
        <div class="flex flex-col space-y-3 p-5">
            <livewire:component.bubbles.friend-bubble
                userName="Riri"
                messageContent="PLEASE BEFRIEND ME, I DONT HAVE FRIENDS"
                :isFriend="false"
                id="2" 
            />
        </div>
    </div>
</div>
