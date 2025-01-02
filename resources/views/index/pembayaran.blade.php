<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Pembayaran/Tagihan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
</head>

<body>
    @include('layouts.navbar')
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-6">Daftar Pembayaran</h1>

        <form action="{{ route('pembayaran.store') }}" method="POST" class="space-y-4">
            @csrf
            @foreach ($pembayarans as $index => $pembayaran)
                <div class="p-4 border rounded-lg bg-gray-50">
                    <div class="flex justify-between">
                        <span class="text-gray-500">No:</span>
                        <span class="font-medium">{{ $index + 1 }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Tanggal Pembayaran:</span>
                        <span class="font-medium">{{ date('Y-m-d') }}</span>
                        <input type="hidden" name="pembayarans[{{ $index }}][tgl_pembayaran]"
                            value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Periode Pembayaran:</span>
                        <input type="text" name="pembayarans[{{ $index }}][periode_pembayaran]"
                            class="bg-white border rounded-md p-2 w-full text-gray-700"
                            value="{{ $pembayaran->periode_pembayaran }}">
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Jumlah:</span>
                        <input type="number" name="pembayarans[{{ $index }}][jumlah]"
                            class="bg-white border rounded-md p-2 w-full text-gray-700"
                            value="{{ $pembayaran->jumlah }}">
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-500">Status:</span>
                        <select name="pembayarans[{{ $index }}][status]"
                            class="bg-white border rounded-md p-2 text-gray-700">
                            <option value="lunas" {{ $pembayaran->status === 'lunas' ? 'selected' : '' }}>Lunas
                            </option>
                            <option value="belum_lunas" {{ $pembayaran->status === 'belum_lunas' ? 'selected' : '' }}>
                                Belum Lunas</option>
                        </select>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama User:</span>
                        <span class="font-medium">{{ $pembayaran->user->name }}</span>
                        <input type="hidden" name="pembayarans[{{ $index }}][user_id]"
                            value="{{ $pembayaran->user->id }}">
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama Paket:</span>
                        <span class="font-medium">{{ $pembayaran->paket->nama_paket }}</span>
                        <input type="hidden" name="pembayarans[{{ $index }}][paket_id]"
                            value="{{ $pembayaran->paket->id }}">
                    </div>
                </div>
            @endforeach
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan Pembayaran</button>
            </div>
        </form>
    </div>
</body>
<footer class="bg-gray-800 text-white py-4 text-center fixed-bottom">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>

</html>
