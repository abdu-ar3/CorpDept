<!-- data_item_kpi.blade.php -->

@if(count($items) > 0)
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Target</th>
                <th>SKI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->target }}</td>
                    <td>{{ $item->ski }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Tidak ada data untuk periode ini.</p>
@endif