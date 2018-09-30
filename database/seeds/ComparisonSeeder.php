<?php

use App\Comparison;
use Illuminate\Database\Seeder;

class ComparisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comparisons = [
            // PHP
            ['lang' => 'php', 'method' => 'array_change_key_case', 'url' => 'http://php.net/manual/en/function.array-change-key-case.php'],
            ['lang' => 'php', 'method' => 'array_chunk', 'url' => 'http://php.net/manual/en/function.array-chunk.php'],
            ['lang' => 'php', 'method' => 'array_column', 'url' => 'http://php.net/manual/en/function.array-column.php'],
            ['lang' => 'php', 'method' => 'array_combine', 'url' => 'http://php.net/manual/en/function.array-combine.php'],
            ['lang' => 'php', 'method' => 'array_count_values', 'url' => 'http://php.net/manual/en/function.array-count-values.php'],
            ['lang' => 'php', 'method' => 'array_diff_assoc', 'url' => 'http://php.net/manual/en/function.array-diff-assoc.php'],
            ['lang' => 'php', 'method' => 'array_diff_key', 'url' => 'http://php.net/manual/en/function.array-diff-key.php'],
            ['lang' => 'php', 'method' => 'array_diff_uassoc', 'url' => 'http://php.net/manual/en/function.array-diff-uassoc.php'],
            ['lang' => 'php', 'method' => 'array_diff_ukey', 'url' => 'http://php.net/manual/en/function.array-diff-ukey.php'],
            ['lang' => 'php', 'method' => 'array_diff', 'url' => 'http://php.net/manual/en/function.array-diff.php'],
            ['lang' => 'php', 'method' => 'array_fill_keys', 'url' => 'http://php.net/manual/en/function.array-fill-keys.php'],
            ['lang' => 'php', 'method' => 'array_fill', 'url' => 'http://php.net/manual/en/function.array-fill.php'],
            ['lang' => 'php', 'method' => 'array_filter', 'url' => 'http://php.net/manual/en/function.array-filter.php'],
            ['lang' => 'php', 'method' => 'array_flip', 'url' => 'http://php.net/manual/en/function.array-flip.php'],
            ['lang' => 'php', 'method' => 'array_intersect_assoc', 'url' => 'http://php.net/manual/en/function.array-intersect-assoc.php'],
            ['lang' => 'php', 'method' => 'array_intersect_key', 'url' => 'http://php.net/manual/en/function.array-intersect-key.php'],
            ['lang' => 'php', 'method' => 'array_intersect_uassoc', 'url' => 'http://php.net/manual/en/function.array-intersect-uassoc.php'],
            ['lang' => 'php', 'method' => 'array_intersect_ukey', 'url' => 'http://php.net/manual/en/function.array-intersect-ukey.php'],
            ['lang' => 'php', 'method' => 'array_intersect', 'url' => 'http://php.net/manual/en/function.array-intersect.php'],
            ['lang' => 'php', 'method' => 'array_key_exists', 'url' => 'http://php.net/manual/en/function.array-key-exists.php'],
            ['lang' => 'php', 'method' => 'array_key_first', 'url' => 'http://php.net/manual/en/function.array-key-first.php'],
            ['lang' => 'php', 'method' => 'array_key_last', 'url' => 'http://php.net/manual/en/function.array-key-last.php'],
            ['lang' => 'php', 'method' => 'array_keys', 'url' => 'http://php.net/manual/en/function.array-keys.php'],
            ['lang' => 'php', 'method' => 'array_map', 'url' => 'http://php.net/manual/en/function.array-map.php'],
            ['lang' => 'php', 'method' => 'array_merge_recursive', 'url' => 'http://php.net/manual/en/function.array-merge-recursive.php'],
            ['lang' => 'php', 'method' => 'array_merge', 'url' => 'http://php.net/manual/en/function.array-merge.php'],
            ['lang' => 'php', 'method' => 'array_multisort', 'url' => 'http://php.net/manual/en/function.array-multisort.php'],
            ['lang' => 'php', 'method' => 'array_pad', 'url' => 'http://php.net/manual/en/function.array-pad.php'],
            ['lang' => 'php', 'method' => 'array_pop', 'url' => 'http://php.net/manual/en/function.array-pop.php'],
            ['lang' => 'php', 'method' => 'array_product', 'url' => 'http://php.net/manual/en/function.array-product.php'],
            ['lang' => 'php', 'method' => 'array_push', 'url' => 'http://php.net/manual/en/function.array-push.php'],
            ['lang' => 'php', 'method' => 'array_rand', 'url' => 'http://php.net/manual/en/function.array-rand.php'],
            ['lang' => 'php', 'method' => 'array_reduce', 'url' => 'http://php.net/manual/en/function.array-reduce.php'],
            ['lang' => 'php', 'method' => 'array_replace_recursive', 'url' => 'http://php.net/manual/en/function.array-replace-recursive.php'],
            ['lang' => 'php', 'method' => 'array_replace', 'url' => 'http://php.net/manual/en/function.array-replace.php'],
            ['lang' => 'php', 'method' => 'array_reverse', 'url' => 'http://php.net/manual/en/function.array-reverse.php'],
            ['lang' => 'php', 'method' => 'array_search', 'url' => 'http://php.net/manual/en/function.array-search.php'],
            ['lang' => 'php', 'method' => 'array_shift', 'url' => 'http://php.net/manual/en/function.array-shift.php'],
            ['lang' => 'php', 'method' => 'array_slice', 'url' => 'http://php.net/manual/en/function.array-slice.php'],
            ['lang' => 'php', 'method' => 'array_splice', 'url' => 'http://php.net/manual/en/function.array-splice.php'],
            ['lang' => 'php', 'method' => 'array_sum', 'url' => 'http://php.net/manual/en/function.array-sum.php'],
            ['lang' => 'php', 'method' => 'array_udiff_assoc', 'url' => 'http://php.net/manual/en/function.array-sum.php'],
            ['lang' => 'php', 'method' => 'array_udiff_uassoc', 'url' => 'http://php.net/manual/en/function.array-udiff-uassoc.php'],
            ['lang' => 'php', 'method' => 'array_udiff', 'url' => 'http://php.net/manual/en/function.array-udiff.php'],
            ['lang' => 'php', 'method' => 'array_uintersect_assoc', 'url' => 'http://php.net/manual/en/function.array-uintersect-assoc.php'],
            ['lang' => 'php', 'method' => 'array_uintersect_uassoc', 'url' => 'http://php.net/manual/en/function.array-uintersect-uassoc.php'],
            ['lang' => 'php', 'method' => 'array_uintersect', 'url' => 'http://php.net/manual/en/function.array-uintersect.php'],
            ['lang' => 'php', 'method' => 'array_unique', 'url' => 'http://php.net/manual/en/function.array-unique.php'],
            ['lang' => 'php', 'method' => 'array_unshift', 'url' => 'http://php.net/manual/en/function.array-unshift.php'],
            ['lang' => 'php', 'method' => 'array_values', 'url' => 'http://php.net/manual/en/function.array-values.php'],
            ['lang' => 'php', 'method' => 'array_walk_recursive', 'url' => 'http://php.net/manual/en/function.array-walk-recursive.php'],
            ['lang' => 'php', 'method' => 'array_walk', 'url' => 'http://php.net/manual/en/function.array-walk.php'],
            ['lang' => 'php', 'method' => 'array', 'url' => 'http://php.net/manual/en/function.array.php'],
            ['lang' => 'php', 'method' => 'arsort', 'url' => 'http://php.net/manual/en/function.arsort.php'],
            ['lang' => 'php', 'method' => 'asort', 'url' => 'http://php.net/manual/en/function.asort.php'],
            ['lang' => 'php', 'method' => 'compact', 'url' => 'http://php.net/manual/en/function.compact.php'],
            ['lang' => 'php', 'method' => 'count', 'url' => 'http://php.net/manual/en/function.count.php'],
            ['lang' => 'php', 'method' => 'current', 'url' => 'http://php.net/manual/en/function.current.php'],
            ['lang' => 'php', 'method' => 'each', 'url' => 'http://php.net/manual/en/function.each.php'],
            ['lang' => 'php', 'method' => 'end', 'url' => 'http://php.net/manual/en/function.end.php'],
            ['lang' => 'php', 'method' => 'extract', 'url' => 'http://php.net/manual/en/function.extract.php'],
            ['lang' => 'php', 'method' => 'in_array', 'url' => 'http://php.net/manual/en/function.in-array.php'],
            ['lang' => 'php', 'method' => 'key_exists', 'url' => 'http://php.net/manual/en/function.key-exists.php'],
            ['lang' => 'php', 'method' => 'key', 'url' => 'http://php.net/manual/en/function.key.php'],
            ['lang' => 'php', 'method' => 'krsort', 'url' => 'http://php.net/manual/en/function.krsort.php'],
            ['lang' => 'php', 'method' => 'ksort', 'url' => 'http://php.net/manual/en/function.ksort.php'],
            ['lang' => 'php', 'method' => 'list', 'url' => 'http://php.net/manual/en/function.list.php'],
            ['lang' => 'php', 'method' => 'natcasesort', 'url' => 'http://php.net/manual/en/function.natcasesort.php'],
            ['lang' => 'php', 'method' => 'natsort', 'url' => 'http://php.net/manual/en/function.natsort.php'],
            ['lang' => 'php', 'method' => 'next', 'url' => 'http://php.net/manual/en/function.next.php'],
            ['lang' => 'php', 'method' => 'pos', 'url' => 'http://php.net/manual/en/function.pos.php'],
            ['lang' => 'php', 'method' => 'prev', 'url' => 'http://php.net/manual/en/function.prev.php'],
            ['lang' => 'php', 'method' => 'range', 'url' => 'http://php.net/manual/en/function.range.php'],
            ['lang' => 'php', 'method' => 'reset', 'url' => 'http://php.net/manual/en/function.reset.php'],
            ['lang' => 'php', 'method' => 'rsort', 'url' => 'http://php.net/manual/en/function.rsort.php'],
            ['lang' => 'php', 'method' => 'shuffle', 'url' => 'http://php.net/manual/en/function.shuffle.php'],
            ['lang' => 'php', 'method' => 'sizeof', 'url' => 'http://php.net/manual/en/function.sizeof.php'],
            ['lang' => 'php', 'method' => 'sort', 'url' => 'http://php.net/manual/en/function.sort.php'],
            ['lang' => 'php', 'method' => 'uasort', 'url' => 'http://php.net/manual/en/function.uasort.php'],
            ['lang' => 'php', 'method' => 'uksort', 'url' => 'http://php.net/manual/en/function.uksort.php'],
            ['lang' => 'php', 'method' => 'usort', 'url' => 'http://php.net/manual/en/function.usort.php'],
            ['lang' => 'php', 'method' => 'is_array', 'url' => 'http://php.net/manual/en/function.is-array.php'],
            ['lang' => 'php', 'method' => 'implode', 'url' => 'http://php.net/manual/en/function.implode.php'],
            // JAVASCRIPT
            ['lang' => 'javascript', 'method' => 'length', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/length'],
            ['lang' => 'javascript', 'method' => 'from', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/from'],
            ['lang' => 'javascript', 'method' => 'isArray', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray'],
            ['lang' => 'javascript', 'method' => 'of', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/of'],
            ['lang' => 'javascript', 'method' => 'concat', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/concat'],
            ['lang' => 'javascript', 'method' => 'copyWithin', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/copyWithin'],
            ['lang' => 'javascript', 'method' => 'entries', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/entries'],
            ['lang' => 'javascript', 'method' => 'every', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/every'],
            ['lang' => 'javascript', 'method' => 'fill', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/fill'],
            ['lang' => 'javascript', 'method' => 'filter', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter'],
            ['lang' => 'javascript', 'method' => 'find', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/find'],
            ['lang' => 'javascript', 'method' => 'findIndex', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/findIndex'],
            ['lang' => 'javascript', 'method' => 'flat', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/flat'],
            ['lang' => 'javascript', 'method' => 'flatMap', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/flatMap'],
            ['lang' => 'javascript', 'method' => 'forEach', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach'],
            ['lang' => 'javascript', 'method' => 'includes', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/includes'],
            ['lang' => 'javascript', 'method' => 'indexOf', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/indexOf'],
            ['lang' => 'javascript', 'method' => 'join', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/join'],
            ['lang' => 'javascript', 'method' => 'keys', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/keys'],
            ['lang' => 'javascript', 'method' => 'lastIndexOf', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/lastIndexOf'],
            ['lang' => 'javascript', 'method' => 'map', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/map'],
            ['lang' => 'javascript', 'method' => 'pop', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/pop'],
            ['lang' => 'javascript', 'method' => 'push', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/push'],
            ['lang' => 'javascript', 'method' => 'reduce', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce'],
            ['lang' => 'javascript', 'method' => 'reduceRight', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/ReduceRight'],
            ['lang' => 'javascript', 'method' => 'reverse', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/reverse'],
            ['lang' => 'javascript', 'method' => 'shift', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/shift'],
            ['lang' => 'javascript', 'method' => 'slice', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/slice'],
            ['lang' => 'javascript', 'method' => 'some', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/some'],
            ['lang' => 'javascript', 'method' => 'sort', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/sort'],
            ['lang' => 'javascript', 'method' => 'splice', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/splice'],
            ['lang' => 'javascript', 'method' => 'toLocaleString', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/toLocaleString'],
            ['lang' => 'javascript', 'method' => 'toSource', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/toSource'],
            ['lang' => 'javascript', 'method' => 'toString', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/toString'],
            ['lang' => 'javascript', 'method' => 'unshift', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/unshift'],
            ['lang' => 'javascript', 'method' => 'values', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/values'],
        ];

        foreach ($comparisons as $key => $comparison) {
            $exists = DB::table('comparisons')->where($comparison)->exists();

            if (!$exists) {
                DB::table('comparisons')->insert($comparison);
            }
        }

        $this->seedPHPMatches();
        $this->seedJavaScriptMatches();
    }

    public function seedPHPMatches()
    {
        // array_search
        // indexOf
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_search',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['indexOf', 'findIndex', 'includes'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_push
        // push
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_push',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['push'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_map
        // map
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_map',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['map'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_reduce
        // reduce
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_reduce',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['reduce'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // is_array
        // isArray
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'is_array',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['isArray'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // count
        // length
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'count',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['length'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // sort
        // sort
        // PHP sort is lowest to highest
        // JavaScript sort is according to string Unicode code points.
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'sort',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['sort'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_slice
        // slice
        // PHP: second param offset
        // JavaScript: second param end
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_slice',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['slice'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_reverse
        // reverse
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_reverse',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['reverse'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // implode
        // join
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'implode',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['join'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // implode
        // join
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_filter',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['filter'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_merge
        // concat
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_merge',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['concat'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_merge_recursive
        // concat
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_merge_recursive',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['concat'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_walk
        // every
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_walk',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['every'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_fill
        // fill
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_fill',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['fill'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_filter
        // filter
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_filter',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['filter'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_walk
        // forEach
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_walk',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['forEach'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_keys
        // keys
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_keys',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['keys'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_pop
        // pop
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_pop',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['pop'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_shift
        // shift
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_shift',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['shift'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_unshift
        // unshift
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_unshift',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['unshift'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);

        // array_values
        // values
        $php = Comparison::where([
            'lang' => 'php',
            'method' => 'array_values',
        ])->first();
        $javascriptIds = DB::table('comparisons')
            ->where('lang', 'javascript')
            ->whereIn('method', ['values'])
            ->pluck('id');
        $php->matches()->sync($javascriptIds, false);
    }

    public function seedJavaScriptMatches()
    {
        // indexOf
        // array_search
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'indexOf',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_search'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // findIndex
        // array_search
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'findIndex',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_search'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // includes
        // array_search
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'includes',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_search'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // push
        // array_push
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'push',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_push'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // map
        // array_map
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'map',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_map'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // reduce
        // array_reduce
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'reduce',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_reduce'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // isArray
        // is_array
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'isArray',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['is_array'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // length
        // count
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'length',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['count'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // sort
        // sort
        // JavaScript sort is according to string Unicode code points.
        // PHP sort is lowest to highest
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'sort',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['sort'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // slice
        // array_slice
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'slice',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_slice'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // reverse
        // array_reverse
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'reverse',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_reverse'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // join
        // implode
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'join',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['implode'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // concat
        // array_merge
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'concat',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_merge'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // concat
        // array_merge_recursive
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'concat',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_merge_recursive'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // every
        // array_walk
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'every',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_walk'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // fill
        // array_fill
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'fill',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_fill'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // filter
        // array_filter
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'filter',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_filter'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // forEach
        // array_walk
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'forEach',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_walk'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // keys
        // array_keys
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'keys',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_keys'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // pop
        // array_pop
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'pop',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_pop'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // shift
        // array_shift
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'shift',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_shift'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // unshift
        // array_unshift
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'unshift',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_unshift'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);

        // values
        // array_values
        $javascript = Comparison::where([
            'lang' => 'javascript',
            'method' => 'values',
        ])->first();
        $phpIds = DB::table('comparisons')
            ->where('lang', 'php')
            ->whereIn('method', ['array_values'])
            ->pluck('id');
        $javascript->matches()->sync($phpIds, false);
    }
}
