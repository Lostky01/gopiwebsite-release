#include <iostream>
using namespace std;

class Boom {
    private:
    string bruh = "Compilation Error";

    public:
    string GetBruh() const {
        return bruh;
    }
}

int main() {
    Boom boom;
    cout<<boom.GetBruh()<<endl;
    return 0;
}
