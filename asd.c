#include <stdio.h>
#include <stdlib.h>
int main()
{
    int n, i, g = 0, j;
    printf("Adjon meg egy számot(pozitív, nagyobb, mint 0 és egész): ");
    scanf("%d", &n);

    for(i = 0; n != 0; i++)
    {
        j = n % 10;
        g = g + j;
        n = n / 10;
    }
    printf("A szám számjegyeinek az összegének az átlaga: %d", g / i);



    return 0;
}
