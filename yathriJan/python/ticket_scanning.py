import sys
import qrcode

# Get ticket ID and seat number from command line arguments
ticket_id = sys.argv[1]
seat_number = sys.argv[2]
ticket_data = f"ticket_id={ticket_id}&seat_number={seat_number}"

# Generate QR code
qr = qrcode.QRCode(
    version=1,
    error_correction=qrcode.constants.ERROR_CORRECT_L,
    box_size=10,
    border=4,
)
qr.add_data(ticket_data)
qr.make(fit=True)

# Save QR code as an image file
img = qr.make_image(fill_color="black", back_color="white")
img.save("ticket_qr.png")

print("QR code generated successfully.")
