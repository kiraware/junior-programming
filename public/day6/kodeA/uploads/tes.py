def f1(n):
    tot = 0
    for i in range(1, n+1):
        tot += i
    return tot

def f2(n):
    return n/2 * (2 + (n-1))

print(f1(1), f2(1))
print(f1(2), f2(2))
print(f1(3), f2(3))
print(f1(4), f2(4))
print(f1(5), f2(5))
