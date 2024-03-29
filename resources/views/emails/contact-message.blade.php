@extends('layouts.email')


@section('email-content')

<tr>
    <td class="wrapper">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <p>Hi there,</p>
                    <p>{{ $contactMessage->name }}, submitted a contact form. Here is the information he has submitted.  Please take a look and reply accordingly.</p>
                    <hr/>
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $contactMessage->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $contactMessage->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ $contactMessage->phone }}</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>{{ $contactMessage->subject }}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>{{ $contactMessage->message }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr/>
                    <p>Good luck!</p>
                </td>
            </tr>
        </table>
    </td>
</tr>
@endsection
