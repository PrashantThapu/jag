<tr>
    <td>{{++$key}}</td>
    <td>{{ str_limit($page->title, 47) }}</td>
    <td class="text-center">
        <span class="badge">{{ $page->is_published ? 'Yes' : 'No' }}</span>
    </td>
    <td class="text-right">
        <a href="{{route('page.edit', $page->slug)}}" class="btn btn-flat btn-primary btn-xs">
            Edit
        </a>
        <button type="button" data-url="{{ route('page.destroy', $page->slug) }}" class="btn btn-flat btn-primary btn-xs item-delete">
            Delete
        </button>
    </td>
</tr>