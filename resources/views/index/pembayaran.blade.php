<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>WiFi-Q : Pembayaran/Tagihan</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_web.png') }}" />
    <style>
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .pagination li {
            margin: 0 3px;
        }

        .pagination a {
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 50px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .pagination .active a {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination a:hover {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .pagination a:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.6);
        }

        .pagination .disabled a {
            background-color: blue;
            color: #6c757d;
            pointer-events: none;
        }
    </style>


</head>

<body>
    @include('layouts.navbar')
    <div class="min-h-screen flex flex-col container mx-auto p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl text-center font-bold mb-6">Tagihan Pembayaran</h1>

        @if ($pembayaran->isEmpty())
            <div class="text-center p-6 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                <p class="text-2xl font-semibold">Tidak ada pembayaran yang ditemukan</p>
            </div>
        @else
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2">Tanggal Pembayaran</th>
                        <th class="py-2">Periode Pembayaran</th>
                        <th class="py-2">Jumlah</th>
                        <th class="py-2">Status</th>
                        <th class="py-2">Nama Paket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembayaran as $bayar)
                        <tr>
                            <td class="border px-4 py-2">{{ $bayar->tgl_pembayaran }}</td>
                            <td class="border px-4 py-2">{{ $bayar->periode_pembayaran }}</td>
                            <td class="border px-4 py-2">{{ $bayar->jumlah }}</td>
                            <td class="border px-4 py-2">{{ $bayar->status }}</td>
                            <td class="border px-4 py-2">{{ $bayar->paket->nama_paket }}</td>
                            <!-- Menampilkan nama paket -->
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $pembayaran->links() }} <!-- Menampilkan pagination -->
            </div>
        @endif

    </div>
</body>
<script></script>
<footer class="bg-gray-800 text-white py-4 text-center fixed-bottom">
    <p>&copy; {{ date('Y') }} WiFi-Q. All rights reserved.</p>
</footer>

</html>
