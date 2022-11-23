<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'publisher_id' => 1,
            'title' => 'Bumi',
            'author' => 'Tere Liye',
            'year' => 2010,
            'synopsis' => "Namaku Raib, usiaku 15 tahun, kelas sepuluh. Aku anak perempuan seperti kalian, adik-adik kalian, tetangga kalian. Aku punya dua kucing, namanya si Putih dan si Hitam. Mama dan papaku menyenangkan. Guru-guru di sekolahku seru. Teman-temanku baik dan kompak.Aku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan.Namaku, Raib. Dan aku bisa menghilang.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1383884931l/18759843.jpg"
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Bulan',
            'author' => 'Tere Liye',
            'year' => 2015,
            'synopsis' => "Namanya Seli, usianya 15 tahun, kelas sepuluh. Dia sama seperti remaja yang lain. Menyukai hal yang sama, mendengarkan lagu-lagu yang sama, pergi ke gerai fast food, menonton serial drama, film, dan hal-hal yang disukai remaja.Tetapi ada sebuah rahasia kecil Seli yang tidak pernah diketahui siapa pun. Sesuatu yang dia simpan sendiri sejak kecil. Sesuatu yang menakjubkan dengan tangannya.Namanya Seli. Dan tangannya bisa mengeluarkan petir. ",
            'image' => "http://3.bp.blogspot.com/-nxCIej6xBSo/VcmvnoEZdEI/AAAAAAAAJKg/1Bh2JpwiTx0/s640/www.goodreads.com.jpg"
        ]);

        Book::create([
            'publisher_id' => 1,
            'title' => 'Bintang',
            'author' => 'Tere Liye',
            'year' => 2017,
            'synopsis' => "Kami bertiga teman baik. Remaja, murid kelas sebelas. Penampilan kami sama seperti murid SMA lainnya. Tapi kami menyimpan rahasia besar.Namaku Raib, aku bisa menghilang. Seli, teman semejaku, bisa mengeluarkan petir dari telapak tangannya. Dan Ali, si biang kerok sekaligus si genius, bisa berubah menjadi beruang raksasa. Kami bertiga kemudian bertualang ke dunia paralel yang tidak diketahui banyak orang, yang disebut Klan Bumi, Klan Bulan, Klan Matahari, dan Klan Bintang. Kami bertemu tokoh-tokoh hebat. Penduduk klan lain.Ini petualangan keempat kami. Setelah tiga kali berhasil menyelamatkan dunia paralel dari kehancuran besar, kami harus menyaksikan bahwa kamilah yang melepaskan “musuh besar”-nya. Ini ternyata bukan akhir petualangan, ini justru awal dari semuanya. Buku keempat dari serial “BUMI”",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1496315625l/35278713._SX318_.jpg"
        ]);

        Book::create([
            'publisher_id' => 2,
            'title' => 'And Then There Were None',
            'author' => 'Agatha Christie',
            'year' => 1939,
            'synopsis' => "First, there were ten—a curious assortment of strangers summoned as weekend guests to a little private island off the coast of Devon. Their host, an eccentric millionaire unknown to all of them, is nowhere to be found. All that the guests have in common is a wicked past they're unwilling to reveal—and a secret that will seal their fate. For each has been marked for murder. A famous nursery rhyme is framed and hung in every room of the mansion.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1638425885l/16299._SY475_.jpg"
        ]);

        Book::create([
            'publisher_id' => 3,
            'title' => 'Murder on the Orient Express',
            'author' => 'Agatha Christie',
            'year' => 2007,
            'synopsis' => "Just after midnight, a snowdrift stops the famous Orient Express in its tracks as it travels through the mountainous Balkans. The luxurious train is surprisingly full for the time of the year but, by the morning, it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside. One of the passengers is none other than detective Hercule Poirot. On vacation. Isolated and with a killer on board, Poirot must identify the murderer—in case he or she decides to strike again.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1486131451l/853510._SY475_.jpg"
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'Manhunt',
            'author' => 'Gretchen Felker-Martin',
            'year' => 2022,
            'synopsis' => "Beth and Fran spend their days traveling the ravaged New England coast, hunting feral men and harvesting their organs in a gruesome effort to ensure they'll never face the same fate. Robbie lives by his gun and one hard-learned motto: other people aren't safe.After a brutal accident entwines the three of them, this found family of survivors must navigate murderous TERFs, a sociopathic billionaire bunker brat, and awkward relationship dynamics―all while outrunning packs of feral men, and their own demons.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1623167555l/53329296.jpg"
        ]);

        Book::create([
            'publisher_id' => 7,
            'title' => 'Gwendy\'s Final Task',
            'author' => 'Stephen King',
            'year' => 2022,
            'synopsis' => "When Gwendy Peterson was twelve, a mysterious stranger named Richard Farris gave her a mysterious box for safekeeping. It offered treats and vintage coins, but it was dangerous. Pushing any of its eight colored buttons promised death and destruction. Years later, the button box reentered Gwendy’s life. A successful novelist and a rising political star, she was once again forced to deal with the temptation the box represented. Now, malignant forces seek to possess the button box, and it is up to Senator Gwendy Peterson to keep it from them at all costs. But where can one hide something from such powerful entities?",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1651710894l/59366265.jpg"
        ]);

        Book::create([
            'publisher_id' => 4,
            'title' => 'Just Like Mother',
            'author' => 'Anne Heltzel',
            'year' => 2022,
            'synopsis' => "The last time Maeve saw her cousin was the night she escaped the cult they were raised in. For the past two decades, Maeve has worked hard to build a normal life in New York City, where she keeps everything—and everyone—at a safe distance. When Andrea suddenly reappears, Maeve regains the only true friend she’s ever had. Soon she’s spending more time at Andrea’s remote Catskills estate than in her own cramped apartment. Maeve doesn’t even mind that her cousin’s wealthy work friends clearly disapprove of her single lifestyle. After all, Andrea has made her fortune in the fertility industry—baby fever comes with the territory.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1631903448l/53620541.jpg"
        ]);

        Book::create([
            'publisher_id' => 5,
            'title' => 'Dead Man\'s Hand',
            'author' => 'James J. Butcher',
            'year' => 2022,
            'synopsis' => "On the streets of Boston, the world is divided into the ordinary Usuals, and the paranormal Unorthodox. And in the Department of Unorthodox Affairs, the Auditors are the magical elite, government-sanctioned witches with spells at their command and all the power and prestige that comes with it. Grimshaw Griswald Grimsby is...not one of those witches. After flunking out of the Auditor training program and being dismissed as \"not Department material,\" Grimsby tried to resign himself to life as a mediocre witch. But he can't help hoping he'll somehow, someway, get another chance to prove his skill. That opportunity comes with a price when his former mentor, aka the most dangerous witch alive, is murdered down the street from where he works, and Grimsby is the Auditors' number one suspect.",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1648218624l/60097440.jpg"
        ]);

        Book::create([
            'publisher_id' => 6,
            'title' => 'Hex Appeal',
            'author' => 'Kate Johnson',
            'year' => 2022,
            'synopsis' => "Essie Winterscale lives in a huge and ever-changing house in the village of Good Winter, in deepest, darkest Essex. She lives with various witches of various ages, one of whom is still a bit salty about having been burned at the stake in 1635, one who keeps accidentally casting fertility spells, and one who knits things that create the future. All Essie ever wanted was to have a normal life but in the end she found herself drawn back to Beldam House because she just can’t stop her witchiness (although the ability to instantly chill wine is pretty awesome, even she has to admit).",
            'image' => "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1660183463l/61931921._SY475_.jpg"
        ]);
    }
}
