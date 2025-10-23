<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Deposit Successful</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', sans-serif; color:#0f172a;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background-color:#f4f6f8; padding:24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(15, 23, 42, 0.08);">
                    <tr>
                        <td style="background:#0ea5e9; padding:20px 24px;" align="left">
                            <div style="font-size:18px; line-height:1.2; color:#ffffff; font-weight:700;">Deposit Receipt</div>
                            <div style="font-size:12px; line-height:1.2; color:rgba(255,255,255,0.9); margin-top:4px;">Transaction confirmation</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px 24px 8px 24px;">
                            <p style="margin:0 0 12px 0; font-size:16px;">Hello {{ $user }},</p>
                            <p style="margin:0 0 16px 0; font-size:14px; color:#334155;">We're happy to let you know your deposit was successful. Here are the details:</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:0 24px 8px 24px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="border-collapse:collapse;">
                                <tr>
                                    <td style="padding:12px 16px; border:1px solid #e5e7eb; border-radius:10px; background:#f8fafc;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-size:13px; color:#64748b;">Amount Deposited</td>
                                                <td align="right" style="font-size:15px; font-weight:700; color:#0f172a;">{{ number_format($amount, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <td style="height:8px; line-height:8px;">&nbsp;</td>
                                                <td style="height:8px; line-height:8px;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="font-size:13px; color:#64748b;">New Total Balance</td>
                                                <td align="right" style="font-size:15px; font-weight:700; color:#0f172a;">{{ number_format($balance, 2) }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:16px 24px 24px 24px;">
                            <p style="margin:0; font-size:13px; color:#475569;">If you did not authorize this transaction, please contact support immediately.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#f1f5f9; padding:16px 24px;" align="center">
                            <p style="margin:0; font-size:12px; color:#64748b;">This is an automated message. Please do not reply.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    
    
    
</body>
</html>
