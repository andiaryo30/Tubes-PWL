use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run()
    {
        Store::create(['name' => 'Toko A', 'location' => 'Jakarta']);
        Store::create(['name' => 'Toko B', 'location' => 'Bandung']);
        Store::create(['name' => 'Toko C', 'location' => 'Surabaya']);
    }
}
