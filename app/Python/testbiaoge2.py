# def go(a) :
#     A = a * 2
#     # B = b + 10
     
#     return A

def  go(**param): #可变参数，默认参数往最后放
    print(param)
    return param
# kb_canshu('bixu',*(1,2,3),)   

# dict1 = {"a" : 21, "b" : 31 , "c" : 42 }
# go(**dict1)