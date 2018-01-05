<?php
/**
 * Gera a paginação dos itens de um array ou collection.
 *
 * @param array|\Illuminate\Support\Collection $items
 * @param int $perPage
 * @param int $page
 * @param array $options
 *
 * @return \Illuminate\Pagination\LengthAwarePaginator
 */
function paginate($items, $perPage = 15, $page = null, $options = [])
{
    $page = $page ?: (\Illuminate\Pagination\Paginator::resolveCurrentPage() ?: 1);

    $items = $items instanceof \Illuminate\Support\Collection ? $items : \Illuminate\Support\Collection::make($items);

    return new \Illuminate\Pagination\LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
}