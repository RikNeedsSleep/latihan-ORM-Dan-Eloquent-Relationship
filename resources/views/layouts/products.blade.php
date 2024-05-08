<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto py-5">
        <div class="text-right mb-3">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Halaman Admin</a>
            <a href="{{ route('merchant.index') }}" class="btn btn-secondary">Halaman Merchant</a>
        </div>
        <h2 class="text-center font-bold text-2xl">PRODUCTS</h2>
        <div class="bg-blue-100 rounded p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach ($products as $product)
                    <div class="bg-gray-100 rounded-lg overflow-hidden shadow-md">
                        <img src="{{ $product->image }}" class="w-full h-72 object-cover" alt="{{ $product->name }}">
                        <div class="p-4">
                            <h5 class="font-bold text-xl mb-2">{{ $product->name }}</h5>
                            <div class="flex justify-between items-center mb-2">
                                <div class="bg-blue-500 text-white px-3 py-1 rounded-full">{{ $product->kondisi }}</div>
                                <div class="bg-gray-500 text-white px-3 py-1 rounded-full">{{ $product->berat }} gram</div>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <div class="bg-green-500 text-white px-3 py-1 rounded-full">{{ $product->stok }}</div>
                                <div class="bg-blue-500 text-white px-3 py-1 rounded-full">Rp {{ number_format($product->harga, 0, ',', '.') }}</div>
                            </div>
                            <p class="text-gray-700 mb-4">{{ $product->deskripsi }}</p>
                            <button class="bg-blue-500 text-white py-2 px-4 rounded-full w-full">Pesan Sekarang</button>
                        </div>
                    </div>
                @endforeach
            </div>
            @if ($products->isEmpty())
                <div class="alert alert-info mt-3" role="alert">
                    Belum ada produk yang ditambahkan.
                </div>
            @endif
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>
</html>
