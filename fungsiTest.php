<?php

    //File : fungsi.php
    use PHPUnit\Framework\TestCase;
    require_once "fungsi.php";

    class FungsiTest extends TestCase
    {
        public function testSegitigaLuas()
        {
            $sl = new Segitiga();

            $alas = 3;
            $tinggi = 4;
            $Segitiga = $sl->segitiga_luas($alas, $tinggi);

            $this->assertEquals(6, $Segitiga);
        }

        public function testSegitigaKeliling()
        {
            $sk = new Segitiga();

            $sisi_a = 3;
            $sisi_b = 4;
            $sisi_c = 5;
            $Segitiga = $sk->segitiga_keliling($sisi_a, $sisi_b, $sisi_c);

            $this->assertEquals(12, $Segitiga);
        }

        public function testLingkaranLuas()
        {
            $ll = new Lingkaran();

            $r = 14;
            $Lingkaran = $ll->lingkaran_luas($r);

            $this->assertEquals(615, $Lingkaran);
        }

        public function testLingkaranKeliiling()
        {
            $lk = new Lingkaran();

            $d = 14;
            $Lingkaran = $lk->lingkaran_keliling($d);

            $this->assertEquals(43.96, $Lingkaran);
        }

        public function testJajarLuas()
        {
            $jl = new JajarGenjang();

            $alas = 6;
            $tinggi = 8;
            $JajarGenjang = $jl->jg_luas($alas, $tinggi);

            $this->assertEquals(48, $JajarGenjang);
        }

        public function testJajarKeliling()
        {
            $jk = new JajarGenjang();

            $sisi_a = 6;
            $sisi_b = 8;
            $JajarGenjang = $jk->jg_keliling($sisi_a, $sisi_b);

            $this->assertEquals(28, $JajarGenjang);
        }
    }
?>