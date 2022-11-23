<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create([
            'name' => 'Gramedia Pustaka Utama',
            'address' => "Gedung Kompas Gramedia Blok 1 lt.5. Jl. Palmerah Barat No.29-37. Jakarta 10270. Indonesia",
            'phone' => "(021) 53650110/11",
            'email' => "redaksi@gramediapustakautama.id",
            'image' => "https://gpu.id/images/logo-gpu.svg?id=c240c063cdb73016a82ad6f5f02e6513"
        ]);

        Publisher::create([
            'name' => 'St. Martin\'s Press',
            'address' => "St. Martin’s Press; Publicity Department. 120 Broadway. New York, NY 10271",
            'phone' => "-",
            'email' => "publicity@stmartins.com",
            'image' => "https://d3ialxc06lvqvq.cloudfront.net/wp-content/uploads/2021/08/17152735/macmillan-logo-red-287x64.png"
        ]);

        Publisher::create([
            'name' => 'Harper Collins Publishers',
            'address' => "HarperCollins Publishers. 195 Broadway. New York, NY 10007",
            'phone' => "212-207-7000",
            'email' => "consumercare@harpercollins.com",
            'image' => "https://cdn.shopify.com/s/files/1/0285/2821/4050/files/hcp-corporate-logo_200x50.png?v=1614768923"
        ]);

        Publisher::create([
            'name' => 'Nightfire Publications',
            'address' => "-",
            'phone' => "-",
            'email' => "https://nightfirepublications.com/contact-us/",
            'image' => "https://i.pinimg.com/280x280_RS/c2/b5/11/c2b51121c79b7db080bf3a9dc009df4b.jpg"
        ]);

        Publisher::create([
            'name' => 'Acepub',
            'address' => "-",
            'phone' => "-",
            'email' => " info@acepub.com",
            'image' => "https://acepub.com/wp-content/uploads/2015/06/acepub-logo_updated_72.png"
        ]);

        Publisher::create([
            'name' => 'One More Chapter',
            'address' => "-",
            'phone' => "-",
            'email' => "https://www.instagram.com/onemorechapterhc/",
            'image' => "https://s28434.pcdn.co/wp-content/uploads/sites/27/2020/06/OneMoreChapter_Branding_Twitter-1024x341.jpg"
        ]);

        Publisher::create([
            'name' => 'Gallery Books Publishing',
            'address' => "-",
            'phone' => "-",
            'email' => "http://simonandschusterpublishing.com/gallery-books/",
            'image' => "https://uploads-ssl.webflow.com/5e5d4a1cfc903a1ce492c850/604a4b3f733d6523c8864b73_Gallery_OpenGraph.jpg"
        ]);
    }
}
