<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontraktor;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;


class UserController extends Controller
{
    public function index() // view halaman dashboard user
    {
        return view("dashboard.layouts.home");
    }

    public function about() // view halaman about
    {
        return view("dashboard.partials.about");
    }

    public function contact() // view halaman contact perusahaan CV Gilang Kencana
    {
        $contact = Contact::all();
        return view("dashboard.contact.viewcontact", [
            "contact" => $contact
        ]);
    }

    public function listKontraktor() // view halaman list kontraktor
    {
        $kontraktor = Kontraktor::all();
        return view("dashboard.listkontraktor.viewlistkontraktor", [
            "kontraktor" => $kontraktor
        ]);
    }

    public function portofolio(Request $request)
    {
        $portfolios = [
            [
                'judul' => 'Eksterior Rumah',
                'gambar' => 'images/Eksterior rumah.jpg'
            ],
            [
                'judul' => 'Meeting Room',
                'gambar' => 'images/Meeting Room.jpg'
            ],
            [
                'judul' => 'Ruang Manager',
                'gambar' => "images/Ruang Manager.jpg"
            ],
            [
                'judul' => 'Kitchen Set',
                'gambar' => 'images/Kitchen Set.jpg'
            ],
            [
                'judul' => 'Kimia Farma Apotek Unit Bisnis Bekasi',
                'gambar' => [
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi1.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi2.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi3.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi4.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi5.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi6.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi7.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi8.png',
                    'images/Foto Dokumentasi Pekerjaan KF Bekasi/kfbekasi9.png',
                ],
            ],
            [
                    'judul' => 'Kimia Farma Apotek Unit Bisnis Balikpapan',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan1.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan2.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan3.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan4.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan5.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan6.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan7.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan8.png',
                        'images/Foto Dokumentasi Pekerjaan KF Balikpapan/kfbalikpapan9.png',
                    ]
                ],
                [
                    'judul' => 'Kimia Farma Apotek Bisnis Batam 1',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image001.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image002.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image003.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image004.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image005.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image006.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image007.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 1/image008.png',
                    ]
                ],
                [
                    'judul' => 'Kimia Farma Apotek Bisnis Batam 2',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image001.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image002.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image003.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image004.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image005.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image006.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image007.png',
                        'images/Foto Dokumentasi Pekerjaan KF Batam 2/image008.png',
                    ]
                ],
                [
                    'judul' => 'Kimia Farma Apotek Diagnostika Unit Jabar 5',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image001.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image002.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image003.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image004.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image005.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image006.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image007.png',
                        'images/Foto Dokumentasi Pekerjaan Diagnostika Unit Jabar 5/image008.png',
                    ]
                ],
                [
                    'judul' => 'Kimia Farma Apotek Bisnis Cirebon',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image001.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image002.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image003.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image004.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image005.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image006.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image007.png',
                        'images/Foto Dokumentasi Pekerjaan KF Cirebon/image008.png',
                    ]
                ],
                [
                    'judul' => 'Kimia Farma Apotek Bisnis Tasikmalaya',
                    'gambar' => [
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image001.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image002.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image003.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image004.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image005.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image006.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image007.png',
                        'images/Foto Dokumentasi Pekerjaan KF Tasikmalaya/image008.png',
                    ]
                ],
                [
                    'judul' => 'Rumah Tinggal Grand Terra Cimahi',
                    'gambar' => 'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Grand Terra Cimahi/image001.png'
                ],
                [
                    'judul' => 'Rumah Tinggal Bapak Bapak Ferry Kota Batam',
                    'gambar' => 'images/Foto Pekerjaan Non PT. Kimia Farma/RUMAH TINGGAL BAPAK FERRY KOTA BATAM/image001.jpg'
                ],
                [
                    'judul' => 'Rumah Tinggal Bapak Nurcahyo Cluster Kota Wisata',
                    'gambar' => [
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image001.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image002.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image003.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image004.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image005.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Rumah Tinggal Bapak Nurcahyo Cluster Miami Kota Wisata/image006.png',
                    ]
                ],
                [
                    'judul' => 'Wakaf Pembangunan Masjid AL Istiqomah Ciawitali RW 10 Citereup',
                    'gambar' => [
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image001.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image002.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image003.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image004.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image005.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image006.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image007.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image008.png',
                        'images/Foto Pekerjaan Non PT. Kimia Farma/Wakaf Pembangunan Masjid AL ISTIQOMAH Ciawitali RW 10 Citererup Kota/image009.png',
                    ]
                ],
        ];

        $collection = collect($portfolios);

        // Pagination
        $perPage = 4;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $collection->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginated = new LengthAwarePaginator(
            $currentItems,
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view("dashboard.portofolio.viewportofolio", [
            'paginated' => $paginated
        ]);
    }
}
