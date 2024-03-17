<x-mail::message>
# Booking Confirmation

Dear {{$userName}},
We are excited to confirm your booking for our upcoming gym class! Thank you for choosing FitBody to support your fitness journey. Below are the details of your class booking:

Your booked : {{$className}}<br>
Starts at {{$classStart}}<br>
Ends at {{$classEnd}}<br>

Please make sure to arrive at the gym at least 10 minutes before the class starts to ensure a smooth check-in process. Don't forget to bring your workout gear, a water bottle, and your enthusiasm!
If you need to cancel or reschedule your booking, please do so at least 24 hours in advance to avoid any cancellation fees.
For any questions or concerns regarding your booking or our services, feel free to reach out to us.
We look forward to seeing you at the class and helping you reach your fitness goals!


<!--
<x-mail::button :url="''">
</x-mail::button>
-->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
