<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayData = [
            [
                'name' => 'KANTOR PERTANAHAN',
                'queue_code' => 'A',
                'services_per_day' => 20,
                'service' => [
                    ['name' => 'ROYA'],
                    ['name' => 'PEMISAHAN SERTIFIKAT'],
                    ['name' => 'PEMECAHAN SERTIFIKAT'],
                    ['name' => 'PENDAFTARAN PERTAMAKALI PENGAKUAN PENGESAHAN HAK']
                ]
            ],
            [
                'name' => 'KEJAKSAAN',
                'queue_code' => 'B',
                'services_per_day' => 30,
                'service' => [
                    ['name' => 'PROSES PENGAMBILAN  TILANG'],
                    ['name' => 'PROSES PENGAMBILAN BARANG BUKTI'],
                    ['name' => 'PELAYANAN HUKUM'],
                ]
            ],
            [
                'name' => 'BPJS KETENAGAKERJAAN',
                'queue_code' => 'C',
                'services_per_day' => 15,
                'service' => [
                    ['name' => 'PENDAFTARAN PEESERTA BPJS KETENAGAKERJAAN UNTUK MENERIMA UPAH (PU) BUKAN PENERIMA UPAH (PBU) DAN JASA KONSTRUKSI (JAKON )'],
                    ['name' => 'KLAIM JAMINAN KECELAKAAN KERJA (JKK) DAN JAMINAN KEMATIAN (JKM) JAMINAN HARI TUA (JHT) DAN JAMINAN PENSIUN (JP)'],
                    ['name' => 'CETAK KARTU DAN SERTIFIKAT KEPESERTAAAN BPJS KETENAGA KERJAAN']
                ]
            ],
            [
                'name' => 'UPTD  PENGELOLAAN PENDAPATAN DAERAH DI BKT (SAMSAT)',
                'queue_code' => 'D',
                'services_per_day' => 175,
                'service' => [
                    ['name' => 'PENGESAHAN STNK'],
                    ['name' => 'PELUNASAN PKB'],
                    ['name' => 'PAJAK TAHUNAN SWDKLLJ DAN IWKBU']
                ]
            ],
            [
                'name' => 'JASA RAHARJA',
                'queue_code' => 'E',
                'services_per_day' => 50,
                'service' => [
                    ['name' => 'PERPANJANG SWDKLLJ'],
                    ['name' => 'PENGURUSAN SANTUNAN UNTUK KORBAN KECELAKAAN'],
                    ['name' => 'PELUNASAN IWKBU']
                ]
            ],
            [
                'name' => 'BNI',
                'queue_code' => 'F',
                'services_per_day' => 0,
                'service' => [
                    ['name' => 'PAYMENT POINT'],
                    ['name' => 'MERCHANT']
                ]
            ],
            [
                'name' => 'PAJAK PRATAMA',
                'queue_code' => 'G',
                'services_per_day' => 100,
                'service' => [
                    ['name' => 'PEMBUATAN NPWP'],
                    ['name' => 'PENGAJUAN PERMOHONAN VALIDASI SSP PPh FINALISASI PENGALIHAN HAK ATAS TANAH DAN BANGUNAN'],
                    ['name' => 'KONSULTASI TENTANG NPWP DAN VALIDASI SSP PPH FINAL PENGALIHAN HAK ATAS TANAH DAN BANGUNAN']
                ]
            ],
            [
                'name' => 'PDAM TIRTA JAM GADANG',
                'queue_code' => 'H',
                'services_per_day' => 10,
                'service' => [
                    ['name' => 'PENGADUAN PELANGGAN'],
                    ['name' => 'PENERIMAAN PENDAFTARAN PASANG BARU']
                ]
            ],
            [
                'name' => 'PLN',
                'queue_code' => 'I',
                'services_per_day' => 20,
                'service' => [
                    ['name' => 'PELAYANAN PASANG BARU (PB)'],
                    ['name' => 'PELAYANAN PERUBAHAN DAYA'],
                    ['name' => 'PELAYANAN PENERANGAN SEMENTARA'],
                    ['name' => 'PELAYANAN KELUHAN PELANGGAN']
                ]
            ],
            [
                'name' => 'BPJS KESEHATAN',
                'queue_code' => 'J',
                'services_per_day' => 30,
                'service' => [
                    ['name' => 'PENDAFTARAN PESERTA PBPU (MANDIRI) DAN PPUPN'],
                    ['name' => 'UP DATE PESERTA DAN CETAK KARTU INDONESIA SEHAT (KIS)'],
                    ['name' => 'PEMBAYARAN IURAN PBPU'],
                    ['name' => 'PEMBERIAN INFORMASI DAN KELUHAN'],
                    ['name' => 'REGISTRASI BADAN USAHA']
                ]
            ],
            [
                'name' => 'BANK NAGARI',
                'queue_code' => 'K',
                'services_per_day' => 200,
                'service' => [
                    ['name' => 'PAYMENT POINT'],
                    ['name' => 'MESIN ATM'],
                    ['name' => 'PROSES'],
                    ['name' => 'PROSES'],
                ]
            ],
            [
                'name' => 'IMIGRASI',
                'queue_code' => 'L',
                'services_per_day' => 20,
                'service' => [
                    ['name' => 'PEMBUATAN PASPOR BARU'],
                    ['name' => 'PERPANJANG PASPOR']
                ]
            ],
            [
                'name' => 'BAZNAS KJKS AL ANSHARI',
                'queue_code' => 'M',
                'services_per_day' => 10,
                'service' => [
                    ['name' => 'PELAYANAN PUBLIK']
                ]
            ],
            [
                'name' => 'TASPEN',
                'queue_code' => 'N',
                'services_per_day' => 15,
                'service' => [
                    ['name' => 'PENGAJUAN TABUNGAN HARI YUA DAN PENSIUNAN LANJUT'],
                    ['name' => 'PENGURUSAN PENSIUN KARENA MENINGGAL AKTIF'],
                    ['name' => 'PENGURUSAN KECELAKAAN KERJA PNS']
                ]
            ],
            [
                'name' => 'KEMENTERIAN AGAMA',
                'queue_code' => 'O',
                'services_per_day' => 40,
                'service' => [
                    ['name' => 'KONSULTASI KEAGAMAAN'],
                    ['name' => 'REKOMENDASI DAN PEMBERIAN IZIN'],
                    ['name' => 'UMROH'],
                    ['name' => 'PENDIRIAN PONDOK AL-QURAN DAN SEJENISNYA'],
                    ['name' => 'PENDIRIAN PONDOK PESANTREN'],
                    ['name' => 'PENDIRIAN MDTA (MADRASAH DINIYAH TAKMILIYAH AMALIYAH)'],
                    ['name' => 'PENDIRIAN TPQ (TAMAN PENDIDIKAN AL-QURAN)'],
                    ['name' => 'UNTUK BEA SISWA'],
                    ['name' => 'PEMBERIAN IZIN RUMAH IBADAH (MUSHOLAH DAN MESJID)']
                ]
            ],
            [
                'name' => 'BANK MANDIRI',
                'queue_code' => 'P',
                'services_per_day' => 200,
                'service' => [
                    ['name' => 'LAYANAN KANTOR KAS']
                ]
            ],
            [
                'name' => 'BPR JAM GADANG',
                'queue_code' => 'Q',
                'services_per_day' => 50,
                'service' => [
                    ['name' => 'LAYANAN PERBANKAN']
                ]
            ],
            [
                'name' => 'POLRES',
                'queue_code' => 'R',
                'services_per_day' => 70,
                'service' => [
                    ['name' => 'SKCK'],
                    ['name' => 'SIM']
                ]
            ],
            [
                'name' => 'BRI',
                'queue_code' => 'S',
                'services_per_day' => 30,
                'service' => [
                    ['name' => 'PAYMENT POINT']
                ]
            ],
            [
                'name' => 'DINAS PMPTSPPTK',
                'queue_code' => 'T',
                'services_per_day' => 0,
                'service' => [
                    ['name' => 'PELAYANAN'],
                    ['name' => 'PENGADUAN']
                ]
            ],
            [
                'name' => 'CAPIL',
                'queue_code' => 'U',
                'services_per_day' => 150,
                'service' => [
                    ['name' => 'KTP EL BAGI PEMULA'],
                    ['name' => 'KTP EL KARENA HILANG/ RUSAK'],
                    ['name' => 'KIA'],
                    ['name' => 'UPDATE DATA PENDUDUK'],
                    ['name' => 'KK'],
                    ['name' => 'SKPWNI'],
                    ['name' => 'SELURUH DOKUMEN PENCATATAN SIPIL'],
                    ['name' => 'SURAT KETERANGAN PEREKAMAN (SUKET)'],
                    ['name' => 'BIODATA WNI'],
                    ['name' => 'LEGALISASI DOKUMEN KEPENDUDUKAN']
                ]
            ],
            [
                'name' => 'BADAN KEUANGAN',
                'queue_code' => 'V',
                'services_per_day' => 0,
                'service' => [
                    ['name' => 'BADAN KEUANGAN']
                ]
            ]
        ];
        
        foreach($arrayData as $key => $value) {
            $service = $value['service'];
            unset($value['service']);
            if($model =  Department::create($value)) {
                $model->createService($service);
            }
        }
    }
}
