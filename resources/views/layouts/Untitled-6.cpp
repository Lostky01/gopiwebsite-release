#include <iostream>
using namespace std;

class Student {
    private:
    string nama;

    public:
    void GetName() {
        this->nama;
    }

    string nama() const {
        return nama;
    }
}
int main() {
    Student student;
    string nama;

    cout<<"Masukkan Nama : ";
    cin>>nama;

    student.GetName(nama);
    cout<<student.nama();
}