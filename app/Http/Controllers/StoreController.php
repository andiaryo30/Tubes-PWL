<?php
class StoreController extends Controller
{
    // Menampilkan form create
    public function create()
    {
        return view('stores.create');
    }

    // Menyimpan data store ke database
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        // Menyimpan data ke database
        Store::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('stores.index')->with('success', 'Toko berhasil ditambahkan!');
    }
}
class StoreController extends Controller
{
    // Menampilkan daftar semua toko
    public function index()
    {
        // Mengambil semua data stores dari database
        $stores = Store::all();

        // Mengirim data ke view
        return view('stores.index', compact('stores'));
    }
}