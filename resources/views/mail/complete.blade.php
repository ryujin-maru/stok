<x-layout title="送信完了">
    <x-elements.sub-main title="Contact" enTitle="お問い合わせ" />

    <div class="h-screen bg-gray-100 pt-8">
        <div class="text-center">
            <h1 class="text-lg">お問い合わせが完了しました。</h1>
            <p class="mt-4">2~3営業日以内に担当よりご連絡致しますので、<br>恐れ入りますがしばらくお待ちください。</p>
            
            <button type="button" class=" mt-8 px-8 py-2 rounded-md text-gray-50 bg-red-500" onClick="location.href='{{route('stok.index')}}'">TOPへ</button>
        </div>
    </div>
    
</x-layout>