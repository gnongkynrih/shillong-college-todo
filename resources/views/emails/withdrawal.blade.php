<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Withdrawal Confirmation</title>
</head>
<body style="margin:0; padding:0; background-color:#f8fafc; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; color:#0f172a;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0; background-color:#f8fafc;">
    <tr>
      <td align="center">
        
        <!-- Main Card -->
        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px; background:#ffffff; border-radius:14px; box-shadow:0 4px 20px rgba(0,0,0,0.06); overflow:hidden;">
          
          <!-- Header -->
          <tr>
            <td align="left" style="background:linear-gradient(135deg,#ef4444,#dc2626); padding:24px;">
              <h1 style="margin:0; font-size:20px; color:#ffffff; font-weight:700;">Withdrawal Confirmation</h1>
              <p style="margin:4px 0 0 0; font-size:13px; color:rgba(255,255,255,0.85);">Your transaction has been completed successfully</p>
            </td>
          </tr>

          <!-- Message -->
          <tr>
            <td style="padding:28px 28px 12px 28px;">
              <p style="margin:0 0 12px 0; font-size:16px;">Hello {{ $name }},</p>
              <p style="margin:0 0 20px 0; font-size:14px; color:#475569;">We’ve successfully processed your withdrawal request. Here are your transaction details:</p>
            </td>
          </tr>

          <!-- Transaction Details Card -->
          <tr>
            <td style="padding:0 28px 24px 28px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f9fafb; border:1px solid #e2e8f0; border-radius:10px; padding:16px;">
                
                <tr>
                  <td style="font-size:14px; color:#475569;">Amount Withdrawn</td>
                  <td align="right" style="font-size:16px; font-weight:700;">{{ number_format($amount, 2) }}</td>
                </tr>
                <tr><td colspan="2" style="height:10px;"></td></tr>
                <tr>
                  <td style="font-size:14px; color:#475569;">Transaction Date</td>
                  <td align="right" style="font-size:15px; font-weight:600;">{{ $date }}</td>
                </tr>
                <tr><td colspan="2" style="height:10px;"></td></tr>
                <tr>
                  <td style="font-size:14px; color:#475569;">New Balance</td>
                  <td align="right" style="font-size:16px; font-weight:700;">{{ number_format($balance, 2) }}</td>
                </tr>

              </table>
            </td>
          </tr>

          <!-- Footer Note -->
          <tr>
            <td style="padding:0 28px 28px 28px;">
              <p style="margin:0; font-size:13px; color:#64748b;">If this transaction wasn’t authorized by you, please contact our support team immediately.</p>
            </td>
          </tr>

          <!-- Bottom Footer -->
          <tr>
            <td align="center" style="background:#f1f5f9; padding:16px;">
              <p style="margin:0; font-size:12px; color:#94a3b8;">This is an automated message. Do not reply to this email.</p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>
