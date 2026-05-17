<form action="/contact" method="POST" class="space-y-4">
    @csrf

    <input
        type="text"
        name="name"
        placeholder="Nama"
        class="w-full border p-3"
    >

    <input
        type="email"
        name="email"
        placeholder="Email"
        class="w-full border p-3"
    >

    <textarea
        name="message"
        placeholder="Pesan"
        class="w-full border p-3"
    ></textarea>

    <button class="bg-black text-white px-5 py-3 rounded-lg">
        Kirim
    </button>
</form>