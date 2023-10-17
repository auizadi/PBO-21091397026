#include <iostream>
#include <cmath>

class BangunDatar {
public:
    virtual double hitungLuas() const {
        return 0.0;
    }
};

class Segitiga : public BangunDatar {
private:
    double alas;
    double tinggi;

public:
    Segitiga(double a, double t) : alas(a), tinggi(t) {}

    double hitungLuas() const override {
        return 0.5 * alas * tinggi;
    }
};

class Persegi : public BangunDatar {
private:
    double sisi;

public:
    Persegi(double s) : sisi(s) {}

    double hitungLuas() const override {
        return sisi * sisi;
    }
};

class Lingkaran : public BangunDatar {
private:
    double jari_jari;

public:
    Lingkaran(double r) : jari_jari(r) {}

    double hitungLuas() const override {
        return 3.14159265359 * jari_jari * jari_jari;
    }
};

int main() {
    int pilihan;
    double alas, tinggi, sisi, jari_jari;

    std::cout << "Program Menghitung Luas Bangun Datar" << std::endl;
    std::cout << "Pilih bentuk (1: Segitiga, 2: Persegi, 3: Lingkaran): ";
    std::cin >> pilihan;

    if (pilihan == 1) {
        std::cout << "Masukkan alas segitiga: ";
        std::cin >> alas;
        std::cout << "Masukkan tinggi segitiga: ";
        std::cin >> tinggi;
        BangunDatar* bentuk = new Segitiga(alas, tinggi);
        std::cout << "Luas Segitiga: " << bentuk->hitungLuas() << std::endl;
        delete bentuk;
    } else if (pilihan == 2) {
        std::cout << "Masukkan panjang sisi persegi: ";
        std::cin >> sisi;
        BangunDatar* bentuk = new Persegi(sisi);
        std::cout << "Luas Persegi: " << bentuk->hitungLuas() << std::endl;
        delete bentuk;
    } else if (pilihan == 3) {
        std::cout << "Masukkan jari-jari lingkaran: ";
        std::cin >> jari_jari;
        BangunDatar* bentuk = new Lingkaran(jari_jari);
        std::cout << "Luas Lingkaran: " << bentuk->hitungLuas() << std::endl;
        delete bentuk;
    } else {
        std::cout << "Pilihan tidak valid." << std::endl;
    }

    return 0;
}
