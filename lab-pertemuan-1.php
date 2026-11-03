<?php
// LAB 1 — Gaya prosedural vs OOP
// Spesifikasi: class Buku dengan constructor(string $judul, string $penulis, int $tahun)
//              dan method info(): string yang memuat judul & tahun.

// 1) Versi prosedural
$buku = [
    ['judul' => 'Laskar Pelangi', 'penulis' => 'Andrea Hirata', 'tahun' => 2005],
    ['judul' => 'Tanam Obat Terepopuler untuk Pelangsing & Penurun Kolestrol', 'penulis' => 'Hery Soeryoko', 'tahun' => 2011],
    ['judul' => 'Perhimpunan Dokter Spesialis Patologi Klinik & Kedokteran Laboratorium Indonesia', 'penulis' => 'Dr.M Djamin', 'tahun' => 2019],
    // TODO: tambahkan 2 buku lagi 
];
foreach ($buku as $b) {
    echo "{$b['judul']} - {$b['penulis']} ({$b['tahun']})\n";
}
    echo "/n"; //pemisah output


class Buku
{
    //Properti
    public string $judul;
    public string $penulis;
    public int $tahun;
    //constructor
    public function __construct(string $judul, string $penulis, int $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }    
      // Method info(): string yang muat judul & tahun
      public function info(): string
      {
          return "{$this->judul} - {$this->penulis} ({$this->tahun})";
      }

}
// Buat 3 object Buku lalu tampilkan info()-nya
$buku1 = new Buku('Laskar Pelangi', 'Andrea Hirata', 2005);
$buku2 = new Buku('Tanam Obat Terepopuler untuk Pelangsing & Penurun Kolestrol', 'Hery Soeryoko', 2011);
$buku3 = new Buku('Perhimpunan Dokter Spesialis Patologi Klinik & Kedokteran Laboratorium Indonesia', 'Dr.M Djamin', 2019);
   
echo $buku1->info();
echo $buku2->info();
echo $buku3->info();
