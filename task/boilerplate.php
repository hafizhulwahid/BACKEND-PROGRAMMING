<?php

# membuat class Animal
class Animal
{
    # property animals
    public $ar_hewan;
    public $data;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->data = $data;
        $ar_hewan = $this->data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        foreach($this->ar_hewan as $x) {
            echo $x;
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data 
        array_push($this->ar_hewan, $this->data);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        $this->ar_hewan[$index] = $data;
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->ar_hewan[$index]);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Kucing", "Kambing"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
