class Pegawai:
    def __init__(self, nama, gaji):
        self.nama = nama
        self.gaji = gaji

    def info(self):
        return f'Nama: {self.nama}, Gaji: {self.gaji}'

class PegawaiTetap(Pegawai):
    def __init__(self, nama, gaji, tunjangan):
        super().__init__(nama, gaji)
        self.tunjangan = tunjangan

    def info(self):
        return f'Pegawai Tetap - {super().info()}, Tunjangan: {self.tunjangan}'

class PegawaiHarian(Pegawai):
    def __init__(self, nama, gaji, jam_kerja):
        super().__init__(nama, gaji)
        self.jam_kerja = jam_kerja

    def info(self):
        return f'Pegawai Harian - {super().info()}, Jam Kerja: {self.jam_kerja} jam'

class PegawaiKontrak(Pegawai):
    def __init__(self, nama, gaji, durasi_kontrak):
        super().__init__(nama, gaji)
        self.durasi_kontrak = durasi_kontrak

    def info(self):
        return f'Pegawai Kontrak - {super().info()}, Durasi Kontrak: {self.durasi_kontrak} bulan'

# Input dari pengguna
nama = input("Masukkan nama pegawai: ")
gaji = float(input("Masukkan gaji pegawai: "))
jenis_pegawai = input("Jenis pegawai (Tetap/Harian/Kontrak): ").lower()

if jenis_pegawai == "tetap":
    tunjangan = float(input("Masukkan tunjangan: "))
    pegawai = PegawaiTetap(nama, gaji, tunjangan)
elif jenis_pegawai == "harian":
    jam_kerja = float(input("Masukkan jam kerja: "))
    pegawai = PegawaiHarian(nama, gaji, jam_kerja)
elif jenis_pegawai == "kontrak":
    durasi_kontrak = int(input("Masukkan durasi kontrak (bulan): "))
    pegawai = PegawaiKontrak(nama, gaji, durasi_kontrak)
else:
    print("Jenis pegawai tidak valid.")

# Cetak informasi pegawai
if "pegawai" in locals():
    print(pegawai.info())
