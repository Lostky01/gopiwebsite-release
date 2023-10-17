#include <iostream>
#include <string>
using namespace std;

class Person {
protected:
    string name;
    int age;
public:
    virtual void getdata() {
        cin >> name >> age;
    }
    virtual void putdata() {
        cout << name << " " << age << " ";
    }
};

class Professor : public Person {
private:
    int publications;
    static int cur_id;
public:
    Professor() {
        cur_id++;
    }
    void getdata() override {
        cin >> name >> age >> publications;
    }
    void putdata() override {
        Person::putdata();
        cout << publications << " " << cur_id << endl;
    }
};

class Student : public Person {
private:
    int marks[6];
    static int cur_id;
public:
    Student() {
        cur_id++;
    }
    void getdata() override {
        cin >> name >> age;
        for (int i = 0; i < 6; i++) {
            cin >> marks[i];
        }
    }
    void putdata() override {
        Person::putdata();
        int sum = 0;
        for (int i = 0; i < 6; i++) {
            sum += marks[i];
        }
        cout << sum << " " << cur_id << endl;
    }
};

int Professor::cur_id = 0;
int Student::cur_id = 0;

int main() {
    int n;
    cin >> n; // The number of objects that are going to be created.
    Person* per[n];

    for (int i = 0; i < n; i++) {
        int val;
        cin >> val;
        if (val == 1) {
            // If val is 1, the current object is of type Professor.
            per[i] = new Professor;
        }
        else {
            // Else, the current object is of type Student.
            per[i] = new Student;
        }
        per[i]->getdata(); // Get the data from the user.
    }

    for (int i = 0; i < n; i++) {
        per[i]->putdata(); // Print the required output for each object.
    }

    return 0;
}
