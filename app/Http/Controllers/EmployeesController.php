<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        // Nomor 1
        $result = DB::select(
            "SELECT *
            FROM employees");

        // Nomor 2
        // $result = DB::select(
        //     "SELECT *
        //     FROM employees
        //     WHERE YEAR (tanggal_masuk) < 2018");

        // Nomor 3
        // $result = DB::select(
            // "SELECT *
            // FROM employees
            // WHERE jabatan = 'Manajer' ");

        // Nomor 4
        // $result = DB::select(
        //     "SELECT *
        //     FROM employees
        //     WHERE status='2'");

        // Nomor 5
        // $result = DB::table('employees')->where('jabatan', 'Staf') ->where('status', '0')->get();

        // Nomor 6
        // $result = DB::select(
            // "SELECT *
            // FROM employees
            // WHERE nip
            // LIKE 'GU%'
            // AND year(tanggal_masuk) IN (2019,2020)");

        // Nomor 7
        //  $result = DB::select(
            // "SELECT COUNT (*)
            // FROM employees");

        // Nomor 8
        // $result = DB::select(
            // "SELECT nama_pegawai,tanggal_masuk, DATEDIFF(CURDATE(),tanggal_masuk) hrkerja
            // FROM employees ");

        // Nomor 9
        // $result = DB::select(
            // "SELECT jabatan,COUNT(*) 'jmlorg'
            // FROM employees;

        // Nomor 10
        // $result = DB::select(
            // "SELECT status,COUNT(*) 'jmlorg'
            // FROM employees;

        // Nomor 11
        // $result = DB::select(
            // "SELECT LEFT(nip,2) divisi,COUNT(*) 'jmlorg'
            // FROM employees
            // GROUP BY LEFT(nip,2)");

        // Nomor 12
        //$result = DB::select(
            // "SELECT *
            // FROM employees
            // ORDER BY tanggal_masuk
            // DES LIMIT 1 ");

        // Nomor 13
        // $result = DB::select(
            // "SELECT *
            // FROM employees
            // ORDER BY tanggal_masuk
            // LIMIT 1 ");

        // Nomor 14
        // $result = DB::select(
            // "SELECT *
            // FROM employees
            // ORDER BY tanggal_lahir,tanggal_masuk");

        // Nomor 15
        // $result = DB::select(
            // "SELECT *
            // FROM employees
            // ORDER BY tanggal_lahir desc,tanggal_masuk ");

        // Nomor 16
        // $result = DB::select(
            // "SELECT LEFT(nip,2),COUNT(*) jml
            // FROM employees
            // GROUP BY LEFT(nip,2)
            // ORDER BY jml
            // LIMIT 1 ");

        // Nomor 17
        //$result = DB::select(
            // "SELECT LEFT(nip,2),COUNT(*) jml
            // FROM employees
            // GROUP BY LEFT(nip,2)
            // ORDER BY jml
            // desc LIMIT 1");

        // Nomor 18
        //$result = DB::select(
            // "SELECT LEFT(nip,2),STATUS,COUNT(*) jml_peg
            // FROM employees
            // GROUP BY LEFT(nip,2),STATUS");

        // Nomor 19
        // $result = DB::select(
            // "SELECT LEFT(nip,2),jabatan,COUNT(*) jml_peg
            // FROM employees
            // GROUP BY LEFT(nip,2),jabatan");

        // Nomor 20
        // $result = DB::select(
            // "SELECT year(CURDATE())-year(tanggal_lahir) umur, COUNT(*) jml_peg
            // FROM employees
            // GROUP BY year(CURDATE())-year(tanggal_lahir)
            // HAVING  umur>24 AND umur<36");

        return view('index', ['employees' => $result]);
    }

    //1. DIVISI IT
    public function insert()
    {
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI001',
                'Rafsan Devi',
                '1982-06-01',
                'Kepala',
                '2015-04-26',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI002',
                'Irawan Maulana',
                '1988-02-10',
                'Supervisor',
                '2016-02-10',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI003',
                'Gevan Angelo Hans',
                '1990-11-07',
                'Manajer',
                '2016-07-18',
                1,
            carbon::now(),
            carbon::now()

            ]
        );

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI004',
                'Yonathan Yeremia',
                '1991-09-16',
                'Asisten Manajer',
                '2017-02-22',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'TI005',
                'Ginting Fernand Surya',
                '1995-03-17',
                'Staf',
                '2019-11-08',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        //2. DIVISI KEUANGAN
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU001',
                'Melania Abigail H.',
                '1990-06-12',
                'Supervisor',
                '2016-10-11',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU002',
                'Jenny Yohana',
                '1992-04-01',
                'Manajer',
                '2017-02-10',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU003',
                'Keisha Amanda Andal',
                '1993-05-20',
                'Asisten Manajer',
                '2017-05-24',
                2,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU004',
                'Ivan Hanjaya',
                '1998-01-27',
                'Staf',
                '2019-10-12',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'KU005',
                'Livia Kosasih',
                '1999-04-15',
                'Staf',
                '2020-03-02',
                1 ,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        //3. DIVISI MARKETING
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK001',
                'Larasati Indah Harto',
                '1980-06-19',
                'Manajer',
                '2015-06-12',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK002',
                'Jason Jehiano Agus',
                '1986-09-10',
                'Asistan Manajer',
                '2017-04-09',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK003',
                'Rissawanti Wijaya',
                '1992-04-10',
                'Supervisor',
                '2019-10-04',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK004',
                'Antony Yeremia Mordhekai',
                '1996-08-15',
                'Staf',
                '2019-09-02',
                3,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'MK005',
                'Tania Ivana Limijaya',
                '1998-09-22',
                'Staf',
                '2021-02-14',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        //4. DIVISI PRODUKSI
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR001',
                'Mega Sulaiman',
                '1991-07-13',
                'Manajer',
                '2018-08-16',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR002',
                'Erica',
                '1994-12-20',
                'Asisten Manajer',
                '2018-10-17',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR003',
                'Hummaira Alfiansyah',
                '1995-07-12',
                'Supervisor',
                '2019-06-19',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR004',
                'Selena Aurelia H.',
                '1998-08-18',
                'Staf',
                '2020-02-28',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'PR005',
                'Imanuel Joy',
                '2000-07-07',
                'Staf',
                '2021-02-18',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        //5. DIVISI GUDANG
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU001',
                'Muhammad Aldaro Oprah',
                '1971-03-20',
                'Kepala',
                '2015-04-16',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU002',
                'Amanda Amaris Hermawan',
                '1974-02-12',
                'Manajer',
                '2015-10-27',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU003',
                'Alfi Ilhamsyah',
                '1986-12-29',
                'Assistant Manajer',
                '2017-08-12',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU004',
                'Stepen Elia',
                '1990-03-01',
                'Staf',
                '2018-05-02',
                3,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'GU005',
                'Soailamudharma',
                '1996-07-11',
                'Staf',
                '2019-05-06',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        //6. DIVISI DELIVERY
        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV001',
                'Sulaiman Muhammad',
                '1970-03-03',
                'Kepala',
                '2015-04-02',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV002',
                'Asep Rahman',
                '1984-08-12',
                'Manajer',
                '2016-12-01',
                0,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV003',
                'Anton Ahmad Raffa',
                '1990-10-25',
                'Staf',
                '2018-06-09',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV004',
                'Risma Dimas Hermanto',
                '1997-01-23',
                'Staf',
                '2019-02-16',
                1,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

        $result = DB::insert(
            "INSERT INTO employees (nip, nama_pegawai, tanggal_lahir, jabatan, tanggal_masuk, status,
           created_at, updated_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ? )",
            [
                'DV005',
                'Anga Aditama',
                '2000-09-06',
                'Staf',
                '2021-04-12',
                3,
            carbon::now(),
            carbon::now()

            ]
        );
        dump($result);

    }
}
