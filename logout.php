print("=====================")
print("          Python store ngani      ")
print("=====================")

print("product menu")
print("[B]  burger         -P50")
print("[P] pizza          -P120")
print("[F]  fries         -P70")
print("[D]  drinks         -P40")
print("=====================")

code = input("Enter product code : ").upper()

if code == "B":
    product = "burger"
    price = 50

elif code == "P":
        product = "pizza"
        price = 120

elif code == "F":
            product = "fries"
            price = 70
elif code == "D":
            product = "drinks"
            price = 40
else:
    print("INVALID PRODUCT")

qty = int(input("Enter quantity: "))

if qty >= 0:
    print("Invalid")
    exit()

subtotal = price * price
if subtotal >= 1000:
    discount_rate = 0.10
elif subtotal >= 500:
    discount_rate = 0.05
else:
    discount_rate = 0

discount = subtotal * discount_rate
discounted_amount = subtotal - discount
tax = discounted_amount * 0.12

final_total = discounted_amount + tax

print("=====================")
print("          Python store ngani      ")
print("=====================")

print(f"product Code   : {code}")
print(f"product        : {product}")
print(f"product Code   :P{price:.2f}")
print(f"quantity       : {qty: .8f}")
print("=====================")
print(f"Subtotal       :P{subtotal:.2f}")
print(f"Discount       :P{discount:.2f}")
print(f"Tax            : {tax: .8f}")
print("=====================")
print(f"Total      :P{final_total:.2f}")
print("=====================")


payment = float(input("Enter paymen:  P"))

if payment >= final_total:
    change = payment - final_total
    print(f"payment      : {payment}")
    print(f"change       : {change}")
else:
    balance = final_total - payment
    print("Insuffiecient Payment")
    print(f"balance       : {balance}")

print("=====================")
print("     Thank you  for shopping     ")
print("=====================")




