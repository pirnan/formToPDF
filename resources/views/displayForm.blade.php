
<h1>Form Submission Details</h1>

<table style="width: 100%; border-collapse: collapse;">
    @foreach($fields as $field)
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">
                {{ $field['label'] }}
            </td>
            <td style="padding: 10px; border: 1px solid #ddd;">
                {{ $field['value'] }}
            </td>
        </tr>
    @endforeach
</table>