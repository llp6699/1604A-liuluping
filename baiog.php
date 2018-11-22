<?php
int function(int x, int y)
{
	if (x == 0 && y == 1) return 1;
	if (x == 1 && y == 0) return 1;
	if (x == 0) return function(x, y - 1);
	if (y == 0) return function(x - 1, y);
	else return function(x - 1, y) + function(x, y - 1);
}
int main()
{
	int x, y;
	int sum;
	while (cin >> x >> y)
	{
		sum = 0;
		sum += function(x, y);
		cout << sum << endl;
	}
	return 0;
}