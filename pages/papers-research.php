<section class="papers-research">
    <h1>VLDB 2019: Research Track Papers</h1>
    <p>The number assigned to each research track paper identifies its poster stand. For example, with research track paper 1.1, look for the stand labeled Res:1.1</p>

    <div class="schedule-wrap">
        <div>
            <div data-day="2">
                <abbr long="Tuesday" short="Tue"></abbr>
                <p><strong>27</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Research_Session_1">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 1: Data-driven Machine Learning</strong>
                <span class="schedule-chair">Chaired by <em>Sudip Roy</em> (Google, USA) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1152">
                <strong class="schedule-item-title" data-num="1.1">An Intermediate Representation for Optimizing Machine Learning Pipelines</strong>
                <span class="schedule-item-people">
                    <span class="author">Andreas&nbsp;Kunft</span>&nbsp;(TU Berlin),
                    <span class="author">Asterios&nbsp;Katsifodimos</span>&nbsp;(TU Delft),
                    <span class="author">Sebastian&nbsp;Schelter</span>&nbsp;(New York University),
                    <span class="author">Sebastian&nbsp;Breß</span>&nbsp;(DFKI GmbH),
                    <span class="author">Tilmann&nbsp;Rabl</span>&nbsp;(Hasso Plattner Institute), and
                    <span class="author">Volker&nbsp;Markl</span>&nbsp;(TU Berlin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Machine learning (ML) pipelines for model training and validation typically include preprocessing, such as data cleaning and feature engineering, prior to training an ML model. Preprocessing combines relational algebra and user-defined functions (UDFs), while model training uses iterations and linear algebra. Current systems are tailored to either of the two. As a consequence, preprocessing and ML steps are optimized in isolation. To enable holistic optimization of ML training pipelines, we present Lara, a declarative domain-specific language for collections and matrices. Lara's intermediate representation (IR) reflects on the complete program, i.e., UDFs, control flow, and both data types. Two views on the IR enable diverse optimizations. Monads enable operator pushdown and fusion across type and loop boundaries. Combinators provide the semantics of domain-specific operators and optimize data access and cross-validation of ML algorithms. Our experiments on preprocessing pipelines and selected ML algorithms show the effects of our proposed optimizations on dense and sparse data, which achieve speedups of up to an order of magnitude.
                </span>

            </p>

            <p class="schedule-item" data-id="1136">
                <strong class="schedule-item-title" data-num="1.2">An Experimental Evaluation of Large Scale GBDT Systems</strong>
                <span class="schedule-item-people">
                    <span class="author">Fangcheng&nbsp;Fu</span>&nbsp;(Peking University),
                    <span class="author">Jiawei&nbsp;Jiang</span>&nbsp;(Peking University),
                    <span class="author">Yingxia&nbsp;Shao</span>&nbsp;(BUPT), and
                    <span class="author">Bin&nbsp;Cui</span>&nbsp;(Peking University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Gradient boosting decision tree (GBDT) is a widely-used machine learning algorithm in both data analytic competitions and real-world industrial applications. Further, driven by the rapid increase in data volume, efforts have been made to train GBDT in a distributed setting to support large-scale workloads. However, we find it surprising that the existing systems manage the training dataset in different ways, but none of them have studied the impact of data management. To that end, this paper aims to study the pros and cons of different data management methods regarding the performance of distributed GBDT. We first introduce a quadrant categorization of data management policies based on data partitioning and data storage. Then we conduct an in-depth systematic analysis and summarize the advantageous scenarios of the quadrants. Based on the analysis, we further propose a novel distributed GBDT system named Vero, which adopts the unexplored composition of vertical partitioning and row-store and suits for many large-scale cases. To validate our analysis empirically, we implement different quadrants in the same code base and compare them under extensive workloads, and finally compare Vero with other state-of-the-art systems over a wide range of datasets. Our theoretical and experimental results provide a guideline on choosing a proper data management policy for a given workload.
                </span>

            </p>

            <p class="schedule-item" data-id="350">
                <strong class="schedule-item-title" data-num="1.3">Snuba: Automating Weak Supervision to Label Training Data</strong>
                <span class="schedule-item-people">
                    <span class="author">Paroma&nbsp;Varma</span>&nbsp;(Stanford University) and
                    <span class="author">Christopher&nbsp;Re</span>&nbsp;(Stanford University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    As deep learning models are applied to increasingly diverse problems, a key bottleneck is gathering enough high-quality training labels tailored to each task. Users therefore turn to weak supervision, relying on imperfect sources of labels like pattern matching and user-defined heuristics. Unfortunately, users have to design these sources for each task. This process can be time consuming and expensive: domain experts often perform repetitive steps like guessing optimal numerical thresholds and developing informative text patterns. To address these challenges, we present Snuba, a system to automatically generate heuristics using a small labeled dataset to assign training labels to a large, unlabeled dataset in the weak supervision setting. Snuba generates heuristics that each labels the subset of the data it is accurate for, and iteratively repeats this process until the heuristics together label a large portion of the unlabeled data. We develop a statistical measure that guarantees the iterative process will automatically terminate before it degrades training label quality. Snuba automatically generates heuristics in under five minutes and performs up to 9.74 F1 points better than the best known user-defined heuristics developed over many days. In collaborations with users at research labs, Stanford Hospital, and on open source datasets, Snuba outperforms other automated approaches like semi-supervised learning by up to 14.35 F1 points.
                </span>

            </p>

            <p class="schedule-item" data-id="390">
                <strong class="schedule-item-title" data-num="1.4">Helix: Holistic Optimization for Accelerating Iterative Machine Learning</strong>
                <span class="schedule-item-people">
                    <span class="author">Doris&nbsp;Xin</span>&nbsp;(University of Illinois at Urbana-Champaign),
                    <span class="author">Stephen&nbsp;Macke</span>&nbsp;(University of Illinois at Urbana-Champaign),
                    <span class="author">Litian&nbsp;Ma</span>&nbsp;(University of Illinois at Urbana-Champaign),
                    <span class="author">Jialin&nbsp;Liu</span>&nbsp;(University of Illinois at Urbana-Champaign),
                    <span class="author">Shuchen&nbsp;Song</span>&nbsp;(University of Illinois at Urbana-Champaign), and
                    <span class="author">Aditya&nbsp;Parameswaran</span>&nbsp;(University of Illinois at Urbana-Champaign)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Machine learning workflow development is a process of trial-and-error: developers iterate on workflows by testing out small modifications until the desired accuracy is achieved. Unfortunately, existing machine learning systems focus narrowly on model training—a small fraction of the overall development time—and neglect to address iterative development. We propose Helix, a machine learning system that optimizes the execution across iterations—intelligently caching and reusing, or recomputing intermediates as appropriate. Helix captures a wide variety of application needs within its Scala DSL, with succinct syntax defining unified processes for data preprocessing, model specification, and learning. We demonstrate that the reuse problem can be cast as a Max-Flow problem, while the caching problem is NP-Hard. We develop effective lightweight heuristics for the latter. Empirical evaluation shows that Helix is not only able to handle a wide variety of use cases in one unified workflow but also much faster, providing run time reductions of up to 19× over state-of-the-art systems, such as DeepDive or KeystoneML, on four real-world applications in natural language processing, computer vision, social and natural sciences.
                </span>

            </p>

            <p class="schedule-item" data-id="302">
                <strong class="schedule-item-title" data-num="1.5">Rafiki: Machine Learning as an Analytics Service System</strong>
                <span class="schedule-item-people">
                    <span class="author">Wei&nbsp;Wang</span>&nbsp;(National University of Singapore),
                    <span class="author">Jinyang&nbsp;Gao</span>&nbsp;(National University of Singapore),
                    <span class="author">Meihui&nbsp;Zhang</span>&nbsp;(Beijing Institute of Technology),
                    <span class="author">Sheng&nbsp;Wang</span>&nbsp;(National University of Singapore),
                    <span class="author">Gang&nbsp;Chen</span>&nbsp;(Zhejiang University),
                    <span class="author">Teck&nbsp;Khim&nbsp;Ng</span>&nbsp;(National University of Singapore),
                    <span class="author">Beng&nbsp;Chin&nbsp;Ooi</span>&nbsp;(National University of Singapore),
                    <span class="author">Jie&nbsp;Shao</span>&nbsp;(University of Electronic Science and Technology of China), and
                    <span class="author">Moaz&nbsp;Reyad</span>&nbsp;(National University of Singapore)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Big data analytics is gaining massive momentum in the last few years. Applying machine learning models to big data has become an implicit requirement or an expectation for most analysis tasks, especially on high-stakes applications. Typical applications include sentiment analysis against reviews for analyzing on-line products, image classification in food logging applications for monitoring user's daily intake, and stock movement prediction. Extending traditional database systems to support the above analysis is intriguing but challenging. First, it is almost impossible to implement all machine learning models in the database engines. Second, expert knowledge is required to optimize the training and inference procedures in terms of efficiency and effectiveness, which imposes heavy burden on the system users. In this paper, we develop and present a system, called Rafiki, to provide the training and inference service of machine learning models. Rafiki provides distributed hyper-parameter tuning for the training service, and online ensemble modeling for the inference service which trades off between latency and accuracy. Experimental results confirm the efficiency, effectiveness, scalability and usability of Rafiki.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_2">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 2: Distributed Graphs</strong>
                <span class="schedule-chair">Chaired by <em>Semih Salihoglu</em> (University of Waterloo, Canada) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="381">
                <strong class="schedule-item-title" data-num="2.1">A Study of Partitioning Policies for Graph Analytics on Large-scale Distributed Platforms</strong>
                <span class="schedule-item-people">
                    <span class="author">Gurbinder&nbsp;S&nbsp;Gill</span>&nbsp;(The University of Texas at Austin),
                    <span class="author">Roshan&nbsp;Dathathri</span>&nbsp;(The University of Texas at Austin),
                    <span class="author">Loc&nbsp;Hoang</span>&nbsp;(The University of Texas at Austin), and
                    <span class="author">Keshav&nbsp;Pingali</span>&nbsp;(The University of Texas at Austin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Distributed-memory clusters are used for in-memory processing of very large graphs with billions of nodes and edges. This requires partitioning the graph among the machines in the cluster. When a graph is partitioned, a node in the graph may be replicated on several machines, and communication is required to keep these replicas synchronized. Good partitioning policies attempt to reduce this synchronization overhead while keeping the computational load balanced across machines. A number of recent studies have looked at ways to control replication of nodes, but these studies are not conclusive because they were performed on small clusters with eight to sixteen machines, did not consider work-efficient data-driven algorithms, or did not optimize communication for the partitioning strategies they studied. This paper presents an experimental study of partitioning strategies for work-efficient graph analytics applications on large KNL and Skylake clusters with up to 256 machines using the Gluon communication runtime which implements partitioning-specific communication optimizations. Evaluation results show that although simple partitioning strategies like Edge-Cuts perform well on a small number of machines, an alternative partitioning strategy called Cartesian Vertex-Cut (CVC) performs better at scale even though paradoxically it has a higher replication factor and performs more communication than Edge-Cut partitioning does. Results from communication micro-benchmarks resolve this paradox by showing that communication overhead depends not only on communication volume but also on the communication pattern among the partitions. These experiments suggest that high-performance graph analytics systems should support multiple partitioning strategies, like Gluon does, as no single graph partitioning strategy is best for all cluster sizes. For such systems, a decision tree for selecting a good partitioning strategy based on characteristics of the computation and the cluster is presented.
                </span>

            </p>

            <p class="schedule-item" data-id="676">
                <strong class="schedule-item-title" data-num="2.2">Dynamic Scaling for Parallel Graph Computations</strong>
                <span class="schedule-item-people">
                    <span class="author">Wenfei&nbsp;Fan</span>&nbsp;(University of Edinburgh, Beihang University, Shenzhen University),
                    <span class="author">Chunming&nbsp;Hu</span>&nbsp;(Beihang Univ.),
                    <span class="author">Muyang&nbsp;Liu</span>&nbsp;(University of Edinburgh),
                    <span class="author">Ping&nbsp;Lu</span>&nbsp;(Beihang Univ.),
                    <span class="author">Qiang&nbsp;Yin</span>&nbsp;(Alibaba Group), and
                    <span class="author">Jingren&nbsp;Zhou</span>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    This paper studies scaling out/in to cope with load surges. Given a graph G that is vertex-partitioned and distributed across n processors, it is to add (resp. remove) k processors and re-distribute G across n+k (resp. n-k) processors such that the load among the processors is balanced, and its replication factor and migration cost are minimized. We show that this tri-criteria optimization problem is intractable, even when k is a constant and when either load balancing or minimum migration is not required. Nonetheless, we propose two parallel solutions to dynamic scaling. One consists of approximation algorithms by extending consistent hashing. Given a load balancing factor above a lower bound, the algorithms guarantee provable bounds on both replication factor and migration cost. The other is a generic scaling scheme. Given any existing vertex-partitioner VP of users' choice, it adaptively scales VP in and out such that it incurs minimum migration cost, and ensures balance and replication factors within a bound relative to that of VP. Using real-life and synthetic graphs, we experimentally verify the efficiency, effectiveness and scalability of the solutions.
                </span>

            </p>

            <p class="schedule-item" data-id="683">
                <strong class="schedule-item-title" data-num="2.3">Multi-Dimensional Balanced Graph Partitioning via Projected Gradient Descent</strong>
                <span class="schedule-item-people">
                    <span class="author">Dmitrii&nbsp;Avdiukhin</span>&nbsp;(Indiana University, Bloomington),
                    <span class="author">Sergey&nbsp;Pupyrev</span>&nbsp;(Facebook), and
                    <span class="author">Grigory&nbsp;Yaroslavtsev</span>&nbsp;(Indiana University, Bloomington)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Motivated by performance optimization of large-scale graph processing systems that distribute the graph across multiple machines, we consider the balanced graph partitioning problem. Compared to most of the previous work, we study the multi-dimensional variant in which balance according to multiple weight functions is required. As we demonstrate by experimental evaluation, such multi-dimensional balance is essential for achieving performance improvements for typical distributed graph processing workloads. We propose a new scalable technique for the multi-dimensional balanced graph partitioning problem. It is based on applying randomized projected gradient descent to a non-convex continuous relaxation of the objective. We show how to implement the new algorithm efficiently in both theory and practice utilizing various approaches for the projection step. Experiments with large-scale graphs containing up to hundreds of billions of edges indicate that our algorithm has superior performance compared to the state of the art.
                </span>

            </p>

            <p class="schedule-item" data-id="680">
                <strong class="schedule-item-title" data-num="2.4">TopoX: Topology Refactorization for Efficient Graph Partitioning and Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Dongsheng&nbsp;Li</span>&nbsp;(National University of Defense Technology),
                    <span class="author">Yiming&nbsp;Zhang</span>&nbsp;(National University of Defense Technology),
                    <span class="author">Jinyan&nbsp;Wang</span>&nbsp;(National University of Defense Technology), and
                    <span class="author">Kian-Lee&nbsp;Tan</span>&nbsp;(National University of Singapore)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Traditional graph partitioning methods attempt to both minimize communication cost and guarantee load balancing in computation. However, the skewed degree distribution of natural graphs makes it difficult to simultaneously achieve the two objectives. This paper proposes topology refactorization (TR), a topology-aware method allowing graph-parallel systems to separately handle the two objectives: refactorization is mainly focused on reducing communication cost, and partitioning is mainly targeted for balancing the load. TR transforms a skewed graph into a more communication-efficient topology through fusion and fission, where the fusion operation organizes a set of neighboring low-degree vertices into a super-vertex, and the fission operation splits a high-degree vertex into a set of sibling sub-vertices. Based on TR, we design an efficient graph-parallel system (TopoX) which pipelines refactorization with partitioning to both reduce communication cost and balance computation load. Prototype evaluation shows that TopoX outperforms state-of-the-art PowerLyra by up to 78.5% (from 37.2%) on real-world graphs and is significantly faster than other graph-parallel systems, while only introducing small refactorization overhead and memory consumption.
                </span>

            </p>

            <p class="schedule-item" data-id="304">
                <strong class="schedule-item-title" data-num="2.5">Start Late or Finish Early: A Distributed Graph Processing System with Redundancy Reduction</strong>
                <span class="schedule-item-people">
                    <span class="author">Shuang&nbsp;Song</span>&nbsp;(The University of Texas at Austin),
                    <span class="author">Xu&nbsp;Liu</span>&nbsp;(College of William and Mary),
                    <span class="author">Qinzhe&nbsp;Wu</span>&nbsp;(The University of Texas at Austin),
                    <span class="author">Andreas&nbsp;Gerstlauer</span>&nbsp;(The University of Texas at Austin),
                    <span class="author">Tao&nbsp;Li</span>&nbsp;(University of Florida), and
                    <span class="author">Lizy&nbsp;K.&nbsp;John</span>&nbsp;(The University of Texas at Austin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Graph processing systems are important in the big data domain. However, processing graphs in parallel often introduces redundant computations in existing algorithms and models. Prior work has proposed techniques to optimize redundancies for out-of-core graph systems, rather than distributed graph systems. In this paper, we study various state-of-the-art distributed graph systems and observe root causes for these pervasively existing redundancies. To reduce redundancies without sacrificing parallelism, we further propose SLFE, a distributed graph processing system, designed with the principle of "start late or finish early". SLFE employs a novel preprocessing stage to obtain a graph's topological knowledge with negligible overhead. SLFE's redundancy-aware vertex-centric computation model can then utilize such knowledge to reduce the redundant computations at runtime. SLFE also provides a set of APIs to improve programmability. Our experiments on an 8-machine high-performance cluster show that SLFE outperforms all well-known distributed graph processing systems with the inputs of real-world graphs, yielding up to 75× speedup. Moreover, SLFE outperforms two state-of-the-art shared memory graph systems on a high-end machine with up to 1644× speedup. SLFE's redundancy-reduction schemes are generally applicable to other vertex-centric graph processing systems.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_3">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 3: Transaction Processing I</strong>
                <span class="schedule-chair">Chaired by <em>Alan Fekete</em> (University of Sydney, Australia) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="90">
                <strong class="schedule-item-title" data-num="3.1">Interactive Checks for Coordination Avoidance</strong>
                <span class="schedule-item-people">
                    <span class="author">Michael&nbsp;J&nbsp;Whittaker</span>&nbsp;(UC Berkeley) and
                    <span class="author">Joseph&nbsp;M.&nbsp;Hellerstein</span>&nbsp;(UC Berkeley)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Strongly consistent distributed systems are easy to reason about but face fundamental limitations in availability and performance. Weakly consistent systems can be implemented with very high performance but place a burden on the application developer to reason about complex interleavings of execution. Invariant confluence provides a formal framework for understanding when we can get the best of both worlds. An invariant confluent object can be efficiently replicated with no coordination needed to preserve its invariants. However, actually determining whether or not an object is invariant confluent is challenging. In this paper, we establish conditions under which a commonly used sufficient condition for invariant confluence is both necessary and sufficient, and we use this condition to design (a) a general-purpose interactive invariant confluence decision procedure and (b) a novel sufficient condition that can be checked automatically. We then take a step beyond invariant confluence and introduce a generalization of invariant confluence, called segmented invariant confluence, that allows us to replicate non-invariant confluent objects with a small amount of coordination. We implemented these formalisms in a prototype called Lucy and found that our decision procedures efficiently handle common real-world workloads including foreign keys, rollups, escrow transactions, and more. We also found that segmented invariant confluent replication can deliver up to an order of magnitude more throughput than linearizable replication for low contention workloads and comparable throughput for medium to high contention workloads.
                </span>

            </p>

            <p class="schedule-item" data-id="1146">
                <strong class="schedule-item-title" data-num="3.2">Ocean Vista: Gossip-Based Visibility Control for Speedy Geo-Distributed Transactions</strong>
                <span class="schedule-item-people">
                    <span class="author">Hua&nbsp;Fan</span>&nbsp;(Alibaba Group) and
                    <span class="author">Wojciech&nbsp;Golab</span>&nbsp;(University of Waterloo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Providing ACID transactions under conflicts across globally distributed data is the Everest of transaction processing protocols. Transaction processing in this scenario is particularly costly due to the high latency of cross-continent network links, which inflates concurrency control and data replication overheads. To mitigate the problem, we introduce Ocean Vista - a novel distributed protocol that guarantees strict serializability. We observe that concurrency control and replication address different aspects of resolving the visibility of transactions, and we address both concerns using a multi-version protocol that tracks visibility using version watermarks and arrives at correct visibility decisions using efficient gossip. Gossiping the watermarks enables asynchronous transaction processing and acknowledging transaction visibility in batches in the concurrency control and replication protocols, which improves efficiency under high cross-datacenter network delays. In particular, Ocean Vista can process conflicting transactions in parallel, and supports efficient write-quorum / read-one access using one round trip in the common case. We demonstrate experimentally in a multi-data-center cloud environment that our design outperforms a leading distributed transaction processing engine (TAPIR) more than 10-fold in terms of peak throughput, albeit at the cost of additional latency for gossip. The latency penalty is generally bounded by one wide area network (WAN) round trip time (RTT), and in the best case (i.e., under light load) our system nearly breaks even with TAPIR by committing transactions in around one WAN RTT.
                </span>

            </p>

            <p class="schedule-item" data-id="496">
                <strong class="schedule-item-title" data-num="3.3">Snapshot Semantics for Temporal Multiset Relations</strong>
                <span class="schedule-item-people">
                    <span class="author">Anton&nbsp;Dignös</span>&nbsp;(Free University of Bozen-Bolzano),
                    <span class="author">Boris&nbsp;Glavic</span>&nbsp;(Illinois Institute of Technology),
                    <span class="author">Xing&nbsp;Niu</span>&nbsp;(Illinois Institute of Technology),
                    <span class="author">Michael&nbsp;H&nbsp;Böhlen</span>&nbsp;(University of Zurich), and
                    <span class="author">Johann&nbsp;Gamper</span>&nbsp;(Free University of Bozen-Bolzano)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Snapshot semantics is widely used for evaluating queries over temporal data: temporal relations are seen as sequences of snapshot relations, and queries are evaluated at each snapshot. In this work, we demonstrate that current approaches for snapshot semantics over interval-timestamped multiset relations are subject to two bugs regarding snapshot aggregation and bag difference. We introduce a novel temporal data model based on K-relations that overcomes these bugs and prove it to correctly encode snapshot semantics. Furthermore, we present an efficient implementation of our model as a database middleware and demonstrate experimentally that our approach is competitive with native implementations.
                </span>

            </p>

            <p class="schedule-item" data-id="1154">
                <strong class="schedule-item-title" data-num="3.4">SLOG: Serializable, Low-latency, Geo-replicated Transactions</strong>
                <span class="schedule-item-people">
                    <span class="author">Kun&nbsp;Ren</span>&nbsp;(eBay Inc),
                    <span class="author">Dennis&nbsp;Li</span>&nbsp;(UMD College Park), and
                    <span class="author">Daniel&nbsp;J.&nbsp;Abadi</span>&nbsp;(UMD College Park)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    For decades, applications deployed on a world-wide scale have been forced to give up at least one of (1) strict serializability (2) low latency writes (3) high transactional throughput. In this paper we discuss SLOG: a system that avoids this tradeoff for workloads which contain physical region locality in data access. SLOG achieves high-throughput, strictly serializable ACID transactions at geo-replicated distance and scale for all transactions submitted across the world, all the while achieving low latency for transactions that initiate from a location close to the home region for data they access. Experiments find that SLOG can reduce latency by more than an order of magnitude relative to state-of-the-art strictly serializable geo-replicated database systems such as Spanner and Calvin, while maintaining high throughput under contention.
                </span>

            </p>

            <p class="schedule-item" data-id="1204">
                <strong class="schedule-item-title" data-num="3.5">FineLine: Log-structured Transactional Storage and Recovery</strong>
                <span class="schedule-item-people">
                    <span class="author">Caetano&nbsp;Sauer</span>&nbsp;(Tableau Software),
                    <span class="author">Goetz&nbsp;Graefe</span>&nbsp;(Google Inc.), and
                    <span class="author">Theo&nbsp;Härder</span>&nbsp;(TU Kaiserslautern)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Recovery is an intricate aspect of transaction processing architectures. In its traditional implementation, recovery requires the management of two persistent data stores—a write-ahead log and a materialized database—which must be carefully orchestrated to maintain transactional consistency. Furthermore, the design and implementation of recovery algorithms have deep ramifications into almost every component of the internal system architecture, from concurrency control to buffer management and access path implementation. Such complexity not only incurs high costs for development, testing, and training, but also unavoidably affects system performance, introducing overheads and limiting scalability. This paper proposes a novel approach for transactional storage and recovery called FineLine. It simplifies the implementation of transactional database systems by eliminating the log-database duality and maintaining all persistent data in a single, log-structured data structure. This approach not only provides more efficient recovery with less overhead, but also decouples the management of persistent data from in-memory access paths. As such, it blurs the lines that separate in-memory from disk-based database systems, providing the efficiency of the former with the reliability of the latter.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_4">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 4: Query Processing I</strong>
                <span class="schedule-chair">Chaired by <em>Steffen Zeuch</em> (DFKI Berlin, Germany) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="351">
                <strong class="schedule-item-title" data-num="4.1">On Obtaining Stable Rankings</strong>
                <span class="schedule-item-people">
                    <span class="author">Abolfazl&nbsp;Asudeh</span>&nbsp;(University of Michigan),
                    <span class="author">H.&nbsp;V.&nbsp;Jagadish</span>&nbsp;(University of Michigan),
                    <span class="author">Gerome&nbsp;Miklau</span>&nbsp;(University of Massachusetts Amherst), and
                    <span class="author">Julia&nbsp;Stoyanovich</span>&nbsp;(New York University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Decision making is challenging when there is more than one criterion to consider. In such cases, it is common to assign a goodness score to each item as a weighted sum of its attribute values and rank them accordingly. Clearly, the ranking obtained depends on the weights used for this summation. Ideally, one would want the ranked order not to change if the weights are changed slightly. We call this property stability of the ranking. A consumer of a ranked list may trust the ranking more if it has high stability. A producer of a ranked list prefers to choose weights that result in a stable ranking, both to earn the trust of potential consumers and because a stable ranking is intrinsically likely to be more meaningful. In this paper, we develop a framework that can be used to assess the stability of a provided ranking and to obtain a stable ranking within an "acceptable" range of weight values (called "the region of interest"). We address the case where the user cares about the rank order of the entire set of items, and also the case where the user cares only about the top-k items. Using a geometric interpretation, we propose algorithms that produce stable rankings. In addition to theoretical analyses, we conduct extensive experiments on real datasets that validate our proposal.
                </span>

            </p>

            <p class="schedule-item" data-id="1142">
                <strong class="schedule-item-title" data-num="4.2">Intermittent Query Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Dixin&nbsp;Tang</span>&nbsp;(University of Chicago),
                    <span class="author">Zechao&nbsp;Shang</span>&nbsp;(University of Chicago),
                    <span class="author">Aaron&nbsp;J&nbsp;Elmore</span>&nbsp;(University of Chicago),
                    <span class="author">Sanjay&nbsp;Krishnan</span>&nbsp;(University of Chicago), and
                    <span class="author">Michael&nbsp;J.&nbsp;Franklin</span>&nbsp;(University of Chicago)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Many applications ingest data in an intermittent, yet largely predictable, pattern. Existing systems tend to ignore how data arrives when making decisions about how to update (or refresh) an ongoing query. To address this shortcoming we propose a new query processing paradigm, Intermittent Query Processing (IQP), that bridges query execution and policies, to determine when to update results and how much resources to allocate for ensuring fast query updates. Here, for a query the system provides an initial result that is to be refreshed when policy dictates, such as after a defined number of new records arrive or a time interval elapses. In between intermittent data arrivals, IQP inactivates query execution by selectively releasing some resources occupied in normal execution that will be least helpful (for future refreshes) according to the arrival patterns for new records. We present an IQP prototype based on PostgreSQL that selectively persists the state associated with query operators to allow for fast query updates while constraining resource consumption. Our experiments show that for several application scenarios IQP greatly lowers query processing latency compared to batch systems, and largely reduces memory consumption with comparable latency compared to a state-of-the-art incremental view maintenance technique.
                </span>

            </p>

            <p class="schedule-item" data-id="1130">
                <strong class="schedule-item-title" data-num="4.3">Automated Verification of Query Equivalence Using Satisfiability Modulo Theories</strong>
                <span class="schedule-item-people">
                    <span class="author">Qi&nbsp;Zhou</span>&nbsp;(Georgia Institute of Technology),
                    <span class="author">Joy&nbsp;Arulraj</span>&nbsp;(Georgia Institute of Technology),
                    <span class="author">Shamkant&nbsp;Navathe</span>&nbsp;(Georgia Institute of Technology),
                    <span class="author">William&nbsp;Harris</span>&nbsp;(Galois Inc), and
                    <span class="author">Dong&nbsp;Xu</span>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Database-as-a-service offerings enable users to quickly create and deploy complex data processing pipelines. In practice, these pipelines often exhibit significant overlap of computation due to redundant execution of certain sub-queries. It is challenging for developers and database administrators to manually detect overlap across queries since they may be distributed across teams, organization roles, and geographic locations. Thus, we require automated cloud-scale tools for identifying equivalent queries to minimize computation overlap. State-of-the-art algebraic approaches to automated verification of query equivalence suffer from two limitations. First, they are unable to model the semantics of widely-used SQL features, such as complex query predicates and three-valued logic. Second, they have a computationally intensive verification procedure. These limitations restrict their efficacy and efficiency in cloud-scale database-as-a-service offerings. This paper makes the case for an alternate approach to determining query equivalence based on symbolic representation. The key idea is to effectively transform a wide range of SQL queries into first order logic formulae and then use satisfiability modulo theories to efficiently verify their equivalence. We have implemented this symbolic representation-based approach in EQUITAS. Our evaluation shows that EQUITAS proves the semantic equivalence of a larger set of query pairs compared to algebraic approaches and reduces the verification time by 27X. We also demonstrate that on a set of 17,461 real-world SQL queries, it automatically identifies redundant execution across 11% of the queries. Our symbolic-representation based technique is currently deployed on Alibaba's MaxCompute database-as-a-service platform.
                </span>

            </p>

            <p class="schedule-item" data-id="974">
                <strong class="schedule-item-title" data-num="4.4">Progressive Top-k Subarray Query Processing in Array Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Dalsu&nbsp;Choi</span>&nbsp;(Korea University),
                    <span class="author">Chang-Sup&nbsp;Park</span>&nbsp;(Dongduk Women's University), and
                    <span class="author">Yon&nbsp;Dohn&nbsp;Chung</span>&nbsp;(Korea University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Unprecedented amounts of multidimensional array data are currently being generated in many fields. These multidimensional array data naturally and efficiently fit into the array data model, and many array management systems based on the array data model have appeared. Accordingly, the requirement for data exploration methods for large multidimensional array data has also increased. In this paper, we propose a method for efficient top-k subarray query processing in array databases, which is one of the most important query types for exploring multidimensional data. First, we define novel top-k query models for array databases: overlap-allowing and disjoint top-k subarray queries. Second, we propose a suite of top-k subarray query processing methods, called PPTS and extend them to distributed processing. Finally, we present the results of extensive experiments using real datasets from an array database, which show that our proposed methods outperform existing naïve methods.
                </span>

            </p>

            <p class="schedule-item" data-id="357">
                <strong class="schedule-item-title" data-num="4.5">Chasing similarity: distribution-aware aggregation scheduling</strong>
                <span class="schedule-item-people">
                    <span class="author">Feilong&nbsp;Liu</span>&nbsp;(The Ohio State University),
                    <span class="author">Ario&nbsp;Salmasi</span>&nbsp;(The Ohio State University),
                    <span class="author">Spyros&nbsp;Blanas</span>&nbsp;(The Ohio State University), and
                    <span class="author">Anastasios&nbsp;Sidiropoulos</span>&nbsp;(University of Illinois at Chicago)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Parallel aggregation is a ubiquitous operation in data analytics that is expressed as GROUP BY in SQL, reduce in Hadoop, or segment in TensorFlow. Parallel aggregation starts with an optional local pre-aggregation step and then repartitions the intermediate result across the network. While local pre-aggregation works well for low-cardinality aggregations, the network communication cost remains significant for high-cardinality aggregations even after local pre-aggregation. The problem is that the repartition-based algorithm for high-cardinality aggregation does not fully utilize the network. In this work, we first formulate a mathematical model that captures the performance of parallel aggregation. We prove that finding optimal aggregation plans from a known data distribution is NP-hard, assuming the Small Set Expansion conjecture. We propose GRASP, a GReedy Aggregation Scheduling Protocol that decomposes parallel aggregation into phases. GRASP is distribution-aware as it aggregates the most similar partitions in each phase to reduce the transmitted data size in subsequent phases. In addition, GRASP takes the available network bandwidth into account when scheduling aggregations in each phase to maximize network utilization. The experimental evaluation on real data shows that GRASP outperforms repartition-based aggregation by 3.5× and LOOM by 2.0×.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_5">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 5: Cloud Databases</strong>
                <span class="schedule-chair">Chaired by <em>Umar Farooq Minhas</em> (Microsoft Research, USA) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="495">
                <strong class="schedule-item-title" data-num="5.1">Autoscaling Tiered Cloud Storage in Anna</strong>
                <span class="schedule-item-people">
                    <span class="author">Chenggang&nbsp;Wu</span>&nbsp;(UC Berkeley),
                    <span class="author">Vikram&nbsp;Sreekanti</span>&nbsp;(UC Berkeley), and
                    <span class="author">Joseph&nbsp;M&nbsp;Hellerstein</span>&nbsp;(UC Berkeley)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In this paper, we describe how we extended a distributed key-value store called Anna into an autoscaling, multi-tier service for the cloud. In its extended form, Anna is designed to overcome the narrow cost-performance limitations typical of current cloud storage systems. We describe three key aspects of Anna's new design: multi-master selective replication of hot keys, a vertical tiering of storage layers with different cost-performance tradeoffs, and horizontal elasticity of each tier to add and remove nodes in response to load dynamics. Anna's policy engine uses these mechanisms to balance service-level objectives around cost, latency and fault tolerance. Experimental results explore the behavior of Anna's mechanisms and policy, exhibiting orders of magnitude efficiency improvements over both commodity cloud KVS services and research systems.
                </span>

            </p>

            <p class="schedule-item" data-id="1126">
                <strong class="schedule-item-title" data-num="5.2">iBTune: Individualized Buffer Tuning for Large-scale Cloud Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Jian&nbsp;Tan</span>&nbsp;(Alibaba),
                    <span class="author">Tieying&nbsp;Zhang</span>&nbsp;(Alibaba Group),
                    <span class="author">Feifei&nbsp;Li</span>&nbsp;(Alibaba),
                    <span class="author">Jie&nbsp;Chen</span>&nbsp;(Alibaba),
                    <span class="author">Qixing&nbsp;Zheng</span>&nbsp;(Alibaba),
                    <span class="author">Ping&nbsp;Zhang</span>&nbsp;(Alibaba),
                    <span class="author">Honglin&nbsp;Qiao</span>&nbsp;(Alibaba),
                    <span class="author">Yue&nbsp;Shi</span>&nbsp;(Alibaba),
                    <span class="author">Wei&nbsp;Cao</span>&nbsp;(Alibaba Cloud), and
                    <span class="author">Rui&nbsp;Zhang</span>&nbsp;(Alibaba)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Tuning the buffer size appropriately is critical to the performance of a cloud database, since memory is usually the resource bottleneck. For large-scale databases supporting heterogeneous applications, configuring the individual buffer sizes for a significant number of database instances presents a scalability challenge. Manual optimization is neither efficient nor effective, and even not feasible for large cloud clusters, especially when the workload may dynamically change on each instance. The difficulty lies in the fact that each database instance requires a different buffer size that is highly individualized, subject to the constraint of the total buffer memory space. It is imperative to resort to algorithms that automatically orchestrate the buffer pool tuning for the entire database instances. To this end, we design iBTune that has been deployed for more than 10, 000 OLTP cloud database instances in our production system. Specifically, it leverages the information from similar workloads to find out the tolerable miss ratio of each instance. Then, it utilizes the relationship between miss ratios and allocated memory sizes to individually optimize the target buffer pool sizes. To provide a guaranteed level of service level agreement (SLA), we design a pairwise deep neural network that uses features from measurements on pairs of instances to predict the upper bounds of the request response times. A target buffer pool size can be adjusted only when the predicted response time upper bound is in a safe limit. The successful deployment on a production environment, which safely reduces the memory footprint by more than 17% compared to the original system that relies on manual configurations, demonstrates the effectiveness of our solution.
                </span>

            </p>

            <p class="schedule-item" data-id="435">
                <strong class="schedule-item-title" data-num="5.3">Unifying Consensus and Atomic Commitment for Effective Cloud Data Management</strong>
                <span class="schedule-item-people">
                    <span class="author">Sujaya&nbsp;A&nbsp;Maiyya</span>&nbsp;(University Of California, Santa Barbara),
                    <span class="author">Faisal&nbsp;Nawab</span>&nbsp;(UC Santa Cruz),
                    <span class="author">Divy&nbsp;Agrawal</span>&nbsp;(University of California, Santa Barbara), and
                    <span class="author">Amr&nbsp;El&nbsp;Abbadi</span>&nbsp;(UC Santa Barbara)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data storage in the Cloud needs to be scalable and fault-tolerant. Atomic commitment protocols such as Two Phase Commit (2PC) provide ACID guarantees for transactional access to sharded data and help in achieving scalability. Whereas consensus protocols such as Paxos consistently replicate data across different servers and provide fault-tolerance. Cloud based datacenters today typically treat the problems of scalability and fault-tolerance disjointedly. In this work, we propose a unification of these two different paradigms into one framework called Consensus and Commitment (C&C) framework. The C&C framework can model existing and well known data management protocols as well as propose new ones. We demonstrate the advantages of the C&C framework by developing a new atomic commitment protocol, Paxos Atomic Commit (PAC), which integrates commitment with recovery in a Paxos-like manner. We also instantiate commit protocols from the C&C framework catered to different Cloud data management techniques. In particular, we propose a novel protocol, Generalized PAC (G-PAC) that integrates atomic commitment and fault tolerance in a cloud paradigm involving both sharding and replication of data. We compare the performance of G-PAC with a Spanner-like protocol, where 2PC is used at the logical data level and Paxos is used for consistent replication of logical data. The experimental results highlight the benefits of combining consensus along with commitment into a single integrated protocol.
                </span>

            </p>

            <p class="schedule-item" data-id="504">
                <strong class="schedule-item-title" data-num="5.4">Pangea: Monolithic Distributed Storage for Data Analytics</strong>
                <span class="schedule-item-people">
                    <span class="author">Jia&nbsp;Zou</span>&nbsp;(Rice University),
                    <span class="author">Arun&nbsp;Iyengar</span>&nbsp;(IBM T.J. Watson Research Center), and
                    <span class="author">Chris&nbsp;Jermaine</span>&nbsp;(Rice University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Storage and memory systems for modern data analytics are heavily layered, managing shared persistent data, cached data, and non-shared execution data in separate systems such as a distributed file system like HDFS, an in-memory file system like Alluxio, and a computation framework like Spark. Such layering introduces significant performance and management costs. In this paper we propose a single system called Pangea that can manage all data—both intermediate and long-lived data, and their buffer/caching, data placement optimization, and failure recovery—all in one monolithic distributed storage system, without any layering. We present a detailed performance evaluation of Pangea and show that its performance compares favorably with several widely used layered systems such as Spark.
                </span>

            </p>

            <p class="schedule-item" data-id="1147">
                <strong class="schedule-item-title" data-num="5.5">An IDEA: An Ingestion Framework for Data Enrichment in AsterixDB</strong>
                <span class="schedule-item-people">
                    <span class="author">Xikui&nbsp;Wang</span>&nbsp;(University of California, Irvine) and
                    <span class="author">Michael&nbsp;Carey</span>&nbsp;(University of California, Irvine)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Big Data today is being generated at an unprecedented rate from various sources such as sensors, applications, and devices, and it often needs to be enriched based on other reference information to support complex analytical queries. Depending on the use case, the enrichment operations can be compiled code, declarative queries, or machine learning models with different complexities. For enrichments that will be frequently used in the future, it can be advantageous to push their computation into the ingestion pipeline so that they can be stored (and queried) together with the data. In some cases, the referenced information may change over time, so the ingestion pipeline should be able to adapt to such changes to guarantee the currency and/or correctness of the enrichment results. In this paper, we present a new data ingestion framework that supports data ingestion at scale, enrichments requiring complex operations, and adaptiveness to reference data changes. We explain how this framework has been built on top of Apache AsterixDB and investigate its performance at scale under various workloads.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_6">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 6: Subgraphs and Communities</strong>
                <span class="schedule-chair">Chaired by <em>A. Erdem Sariyuce</em> (University at Buffalo, USA) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1099">
                <strong class="schedule-item-title" data-num="6.1">Distributed Subgraph Matching on Timely Dataflow</strong>
                <span class="schedule-item-people">
                    <span class="author">Longbin&nbsp;Lai</span>&nbsp;(UNSW),
                    <span class="author">Zhu&nbsp;Qing</span>&nbsp;(East China Normal University),
                    <span class="author">Zhengyi&nbsp;Yang</span>&nbsp;(University of New South Wales, Sydney),
                    <span class="author">Xin&nbsp;Jin</span>&nbsp;(East China Normal University),
                    <span class="author">Zhengmin&nbsp;Lai</span>&nbsp;(East China Normal University),
                    <span class="author">Ran&nbsp;Wang</span>&nbsp;(East China Normal University),
                    <span class="author">Kongzhang&nbsp;Hao</span>&nbsp;(UNSW),
                    <span class="author">Xuemin&nbsp;Lin</span>&nbsp;(University of New South Wales),
                    <span class="author">Lu&nbsp;Qin</span>&nbsp;(UTS),
                    <span class="author">Wenjie&nbsp;Zhang</span>&nbsp;(University of New South Wales),
                    <span class="author">Ying&nbsp;Zhang</span>&nbsp;(University of Technology Sydney),
                    <span class="author">Zhengping&nbsp;Qian</span>&nbsp;(Alibaba Group), and
                    <span class="author">Jingren&nbsp;Zhou</span>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Recently there emerge many distributed algorithms that aim at solving subgraph matching at scale. Existing algorithm-level comparisons failed to provide a systematic view of distributed subgraph matching mainly due to the intertwining of strategy and optimization. In this paper, we identify four strategies and three general-purpose optimizations from representative state-of-the-art algorithms. We implement the four strategies with the optimizations based on the common Timely dataflow system for systematic strategy-level comparison. Our implementation covers all representative algorithms. We conduct extensive experiments for both unlabelled matching and labelled matching to analyze the performance of distributed subgraph matching under various settings, which is finally summarized as a practical guide.
                </span>

            </p>

            <p class="schedule-item" data-id="200">
                <strong class="schedule-item-title" data-num="6.2">Local Algorithms for Hierarchical Dense Subgraph Discovery</strong>
                <span class="schedule-item-people">
                    <span class="author">A.&nbsp;Erdem&nbsp;Sariyuce</span>&nbsp;(University at Buffalo, US),
                    <span class="author">C.&nbsp;Seshadhri</span>&nbsp;(UCSC), and
                    <span class="author">Ali&nbsp;Pinar</span>&nbsp;(Sandia National Laboratories)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Finding the dense regions of a graph and relations among them is a fundamental problem in network analysis. Core and truss decompositions reveal dense subgraphs with hierarchical relations. The incremental nature of algorithms for computing these decompositions and the need for global information at each step of the algorithm hinders scalable parallelization and approximations since the densest regions are not revealed until the end. In a previous work, Lu et al. proposed to iteratively compute the h-indices of neighbor vertex degrees to obtain the core numbers and prove that the convergence is obtained after a finite number of iterations. This work generalizes the iterative h-index computation for truss decomposition as well as nucleus decomposition which leverages higher-order structures to generalize core and truss decompositions. In addition, we prove convergence bounds on the number of iterations. We present a framework of local algorithms to obtain the core, truss, and nucleus decompositions. Our algorithms are local, parallel, offer high scalability, and enable approximations to explore time and quality trade-offs. Our shared-memory implementation verifies the efficiency, scalability, and effectiveness of our local algorithms on real-world networks.
                </span>

            </p>

            <p class="schedule-item" data-id="1135">
                <strong class="schedule-item-title" data-num="6.3">Fast and Robust Distributed Subgraph Enumeration</strong>
                <span class="schedule-item-people">
                    <span class="author">Xuguang&nbsp;Ren</span>&nbsp;(Griffith University),
                    <span class="author">Junhu&nbsp;Wang</span>&nbsp;(Griffith University),
                    <span class="author">Wook-Shin&nbsp;Han</span>&nbsp;(POSTECH), and
                    <span class="author">Jeffrey&nbsp;Xu&nbsp;Yu</span>&nbsp;(The Chinese University of Hong Kong)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We study the subgraph enumeration problem under distributed settings. Existing solutions either suffer from severe memory crisis or rely on large indexes, which makes them impractical for very large graphs. Most of them follow a synchronous model where the performance is often bottlenecked by the machine with the worst performance. Motivated by this, in this paper, we propose RADS, a Robust Asynchronous Distributed Subgraph enumeration system. RADS first identifies results that can be found using singlemachine algorithms. This strategy not only improves the overall performance but also reduces network communication and memory cost. Moreover, RADS employs a novel region-grouped multi-round expand verify & filter framework which does not need to shuffle and exchange the intermediate results, nor does it need to replicate a large part of the data graph in each machine. This feature not only reduces network communication cost and memory usage, but also allows us to adopt simple strategies for memory control and load balancing, making it more robust. Several optimization strategies are also used in RADS to further improve the performance. Our experiments verified the superiority of RADS to state-of-the-art subgraph enumeration approaches.
                </span>

            </p>

            <p class="schedule-item" data-id="1093">
                <strong class="schedule-item-title" data-num="6.4">Finding Theme Communities from Database Networks</strong>
                <span class="schedule-item-people">
                    <span class="author">Lingyang&nbsp;Chu</span>&nbsp;(Simon Fraser University),
                    <span class="author">Zhefeng&nbsp;Wang</span>&nbsp;(Huawei Technologies),
                    <span class="author">Jian&nbsp;Pei</span>&nbsp;(Simon Fraser University),
                    <span class="author">Yanyan&nbsp;Zhang</span>&nbsp;(Simon Fraser University),
                    <span class="author">Yu&nbsp;Yang</span>&nbsp;(Simon Fraser University), and
                    <span class="author">Enhong&nbsp;Chen</span>&nbsp;(University of Science and Technology of China)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Given a database network where each vertex is associated with a transaction database, we are interested in finding theme communities. Here, a theme community is a cohesive subgraph such that a common pattern is frequent in all transaction databases associated with the vertices in the subgraph. Finding all theme communities from a database network enjoys many novel applications. However, it is challenging since even counting the number of all theme communities in a database network is #P-hard. Inspired by the observation that a theme community shrinks when the length of the pattern increases, we investigate several properties of theme communities and develop TCFI, a scalable algorithm that uses these properties to effectively prune the patterns that cannot form any theme community. We also design TC-Tree, a scalable algorithm that decomposes and indexes theme communities efficiently. Retrieving a ranked list of theme communities from a TC-Tree of hundreds of millions of theme communities takes less than 1 second. Extensive experiments and a case study demonstrate the effectiveness and scalability of TCFI and TC-Tree in discovering and querying meaningful theme communities from large database networks.
                </span>

            </p>

            <p class="schedule-item" data-id="1104">
                <strong class="schedule-item-title" data-num="6.5">Vertex Priority Based Butterfly Counting for Large-scale Bipartite Networks</strong>
                <span class="schedule-item-people">
                    <span class="author">Kai&nbsp;Wang</span>&nbsp;(University of New South Wales),
                    <span class="author">Xuemin&nbsp;Lin</span>&nbsp;(University of New South Wales),
                    <span class="author">Lu&nbsp;Qin</span>&nbsp;(University of Technology Sydney),
                    <span class="author">Wenjie&nbsp;Zhang</span>&nbsp;(University of New South Wales), and
                    <span class="author">Ying&nbsp;Zhang</span>&nbsp;(University of Technology Sydney)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Bipartite networks are of great importance in many real-world applications. In bipartite networks, butterfly (i.e., a complete 2 x 2 biclique) is the smallest non-trivial cohesive structure and plays a key role. In this paper, we study the problem of efficient counting the number of butterflies in bipartite networks. The most advanced techniques are based on enumerating wedges which is the dominant cost of counting butterflies. Nevertheless, the existing algorithms cannot efficiently handle large-scale bipartite networks. This becomes a bottleneck in large-scale applications. In this paper, instead of the existing layer-priority-based techniques, we propose a vertex-priority-based paradigm BFC-VP to enumerate much fewer wedges; this leads to a significant improvement of the time complexity of the state-of-the-art algorithms. In addition, we present cache-aware strategies to further improve the time efficiency while theoretically retaining the time complexity of BFC-VP. Moreover, we also show that our proposed techniques can work efficiently in external and parallel contexts. Our extensive empirical studies demonstrate that the proposed techniques can speed up the state-of-the-art techniques by up to two orders of magnitude for the real datasets.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_7">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 7: Similarity Search and Data Extraction</strong>
                <span class="schedule-chair">Chaired by <em>Chen Li</em> (University of California Irvine, USA) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1131">
                <strong class="schedule-item-title" data-num="7.1">Towards a Unified Framework for String Similarity Joins</strong>
                <span class="schedule-item-people">
                    <span class="author">Pengfei&nbsp;Xu</span>&nbsp;(University of Helsinki) and
                    <span class="author">Jiaheng&nbsp;Lu</span>&nbsp;(University of Helsinki)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A similarity join aims to find all similar pairs between two collections of records. Established algorithms utilise different similarity measures, either syntactic or semantic, to quantify the similarity between two records. However, when records are similar in forms of a mixture of syntactic and semantic relations, utilising a single measure becomes inadequate to disclose the real similarity between records, and hence unable to obtain high-quality join results.<br />In this paper, we study a unified framework to find similar records by combining multiple similarity measures. To achieve this goal, we first develop a new similarity framework that unifies the existing three kinds of similarity measures simultaneously, including syntactic (typographic) similarity, synonym-based similarity, and taxonomy-based similarity. We then theoretically prove that finding the maximum unified similarity between two strings is generally NP-hard, and furthermore develop an approximate algorithm which runs in polynomial time with a non-trivial approximation guarantee. To support efficient string joins based on our unified similarity measure, we adopt the filter-and-verification framework and propose a new signature structure, called pebble, which can be simultaneously adapted to handle multiple similarity measures. The salient feature of our approach is that, it can judiciously select the best pebble signatures and the overlap thresholds to maximise the filtering power. Extensive experiments show that our methods are capable of finding similar records having mixed types of similarity relations while exhibiting high efficiency and scalability for similarity joins. The implementation can be downloaded at https://github.com/HY-UDBMS/AU-Join.
                </span>

            </p>

            <p class="schedule-item" data-id="173">
                <strong class="schedule-item-title" data-num="7.2">Pigeonring: A Principle for Faster Thresholded Similarity Search</strong>
                <span class="schedule-item-people">
                    <span class="author">Jianbin&nbsp;Qin</span>&nbsp;(The University of Edinburgh) and
                    <span class="author">Chuan&nbsp;Xiao</span>&nbsp;(Nagoya University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The pigeonhole principle states that if n items are contained in m boxes, then at least one box has no more than n / m items. It is utilized to solve many data management problems, especially for thresholded similarity searches. Despite many pigeonhole principle-based solutions proposed in the last few decades, the condition stated by the principle is weak. It only constrains the number of items in a single box. By organizing the boxes in a ring, we propose a new principle, called the pigeonring principle, which constrains the number of items in multiple boxes and yields stronger conditions. To utilize the new principle, we focus on problems defined in the form of identifying data objects whose similarities or distances to the query is constrained by a threshold. Many solutions to these problems utilize the pigeonhole principle to find candidates that satisfy a filtering condition. By the new principle, stronger filtering conditions can be established. We show that the pigeonhole principle is a special case of the new principle. This suggests that all the pigeonhole principle-based solutions are possible to be accelerated by the new principle. A universal filtering framework is introduced to encompass the solutions to these problems based on the new principle. Besides, we discuss how to quickly find candidates specified by the new principle. The implementation requires only minor modifications on top of existing pigeonhole principle-based algorithms. Experimental results on real datasets demonstrate the applicability of the new principle as well as the superior performance of the algorithms based on the new principle.
                </span>

            </p>

            <p class="schedule-item" data-id="301">
                <strong class="schedule-item-title" data-num="7.3">The Lernaean Hydra of Data Series Similarity Search: An Experimental Evaluation of the State of the Art</strong>
                <span class="schedule-item-people">
                    <span class="author">Karima&nbsp;Echihabi</span>&nbsp;(ENSIAS, Université Mohammed V de Rabat),
                    <span class="author">Kostas&nbsp;Zoumpatianos</span>&nbsp;(Harvard University),
                    <span class="author">Themis&nbsp;Palpanas</span>&nbsp;(Paris Descartes University), and
                    <span class="author">Houda&nbsp;Benbrahim</span>&nbsp;(ENSIAS, Université Mohammed V de Rabat)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Increasingly large data series collections are becoming commonplace across many different domains and applications. A key operation in the analysis of data series collections is similarity search, which has attracted lots of attention and effort over the past two decades. Even though several relevant approaches have been proposed in the literature, none of the existing studies provides a detailed evaluation against the available alternatives. The lack of comparative results is further exacerbated by the non-standard use of terminology, which has led to confusion and misconceptions. In this paper, we provide definitions for the different flavors of similarity search that have been studied in the past, and present the first systematic experimental evaluation of the efficiency of data series similarity search techniques. Based on the experimental results, we describe the strengths and weaknesses of each approach and give recommendations for the best approach to use under typical use cases. Finally, by identifying the shortcomings of each method, our findings lay the ground for solid further developments in the field.
                </span>

            </p>

            <p class="schedule-item" data-id="776">
                <strong class="schedule-item-title" data-num="7.4">Balance-Aware Distributed String Similarity-Based Query Processing System</strong>
                <span class="schedule-item-people">
                    <span class="author">Ji&nbsp;Sun</span>&nbsp;(Tsinghua University),
                    <span class="author">Zeyuan&nbsp;Shang</span>&nbsp;(MIT),
                    <span class="author">Guoliang&nbsp;Li</span>&nbsp;(Tsinghua University),
                    <span class="author">Dong&nbsp;Deng</span>&nbsp;(MIT), and
                    <span class="author">Zhifeng&nbsp;Bao</span>&nbsp;(RMIT University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data analysts spend more than 80% of time on data cleaning and integration in the whole process of data analytics due to data errors and inconsistencies. Similarity-based query processing is an important way to tolerate the errors and inconsistencies. However, similarity-based query processing is rather costly and traditional database cannot afford such expensive requirement. In this paper, we develop a distributed in-memory similarity-based query processing system called Dima. Dima supports four core similarity operations, i.e., similarity selection, similarity join, top-k selection and top-k join. Dima extends SQL for users to easily invoke these similarity-based operations in their data analysis tasks. To avoid expensive data transmission in a distributed environment, we propose balance-aware signatures where two records are similar if they share common signatures, and we can adaptively select the signatures to balance the workload. Dima builds signature-based global indexes and local indexes to support similarity operations. Since Spark is one of the widely adopted distributed in-memory computing systems, we have seamlessly integrated Dima into Spark and developed effective query optimization techniques in Spark. To the best of our knowledge, this is the first full-fledged distributed in-memory system that can support complex similarity-based query processing on large-scale datasets. We have conducted extensive experiments on four real-world datasets. Experimental results show that Dima outperforms state-of-the-art studies by 1-3 orders of magnitude and has good scalability.
                </span>

            </p>

            <p class="schedule-item" data-id="1127">
                <strong class="schedule-item-title" data-num="7.5">Online Template Induction for Machine-Generated Emails</strong>
                <span class="schedule-item-people">
                    <span class="author">Michael&nbsp;J&nbsp;Whittaker</span>&nbsp;(UC Berkeley),
                    <span class="author">Nick&nbsp;Edmonds</span>&nbsp;(Google),
                    <span class="author">Sandeep&nbsp;Tata</span>&nbsp;(Google),
                    <span class="author">James&nbsp;B&nbsp;Wendt</span>&nbsp;(Google), and
                    <span class="author">Marc&nbsp;Najork</span>&nbsp;(Google)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In emails, information abounds. Whether it be a bill reminder, a hotel confirmation, or a shipping notification, our emails contain useful bits of information that enable a number of applications. Most of this email traffic is machine-generated, sent from a business to a human. These business-to-consumer emails are typically instantiated from a set of email templates, and discovering these templates is a key step in enabling a variety of intelligent experiences. Existing email information extraction systems typically separate information extraction into two steps: an offline template discovery process (called template induction) that is periodically run on a sample of emails, and an online email annotation process that applies discovered templates to emails as they arrive. Since information extraction requires an email's template to be known, any delay in discovering a newly created template causes missed extractions, lowering the overall extraction coverage. In this paper, we present a novel system called Crusher that discovers templates completely online, reducing template discovery delay from a week (for the existing MapReduce-based batch system) to minutes. Furthermore, Crusher has a resource consumption footprint that is significantly smaller than the existing batch system. We also report on the surprising lesson we learned that conventional stream processing systems do not present a good framework on which to build Crusher. Crusher delivers an order of magnitude more throughput than a prototype built using a stream processing engine. We hope that these lessons help designers of stream processing systems accommodate a broader range of applications like online template induction in the future.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_8">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 8: Hardware and Machine Learning</strong>
                <span class="schedule-chair">Chaired by <em>Berthold Reinwald</em> (IBM Research - Almaden, USA) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="428">
                <strong class="schedule-item-title" data-num="8.1">HetExchange: Encapsulating heterogeneous CPU-GPU parallelism in JIT compiled engines</strong>
                <span class="schedule-item-people">
                    <span class="author">Periklis&nbsp;Chrysogelos</span>&nbsp;(EPFL),
                    <span class="author">Manos&nbsp;Karpathiotakis</span>&nbsp;(Facebook),
                    <span class="author">Raja&nbsp;Appuswamy</span>&nbsp;(Eurecom), and
                    <span class="author">Anastasia&nbsp;Ailamaki</span>&nbsp;(EPFL)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Modern server hardware is increasingly heterogeneous as hardware accelerators, such as GPUs, are used together with multicore CPUs to meet the computational demands of modern data analytics workloads. Unfortunately, query parallelization techniques used by analytical database engines are designed for homogeneous multicore servers, where query plans are parallelized across CPUs to process data stored in cache coherent shared memory. Thus, these techniques are unable to fully exploit available heterogeneous hardware, where one needs to exploit task-parallelism of CPUs and data-parallelism of GPUs for processing data stored in a deep, non-cache-coherent memory hierarchy with widely varying access latencies and bandwidth. In this paper, we introduce HetExchange-a parallel query execution framework that encapsulates the heterogeneous parallelism of modern multi-CPU-multi-GPU servers and enables the parallelization of (pre-)existing sequential relational operators. In contrast to the interpreted nature of traditional Exchange, HetExchange is designed to be used in conjunction with JIT compiled engines in order to allow a tight integration with the proposed operators and generation of efficient code for heterogeneous hardware. We validate the applicability and efficiency of our design by building a prototype that can operate over both CPUs and GPUs, and enables its operators to be parallelism- and data-location-agnostic. In doing so, we show that efficiently exploiting CPU-GPU parallelism can provide 2.8x and 6.4x improvement in performance compared to state-of-the-art CPU-based and GPU-based DBMS.
                </span>

            </p>

            <p class="schedule-item" data-id="425">
                <strong class="schedule-item-title" data-num="8.2">Analyzing Efficient Stream Processing on Modern Hardware</strong>
                <span class="schedule-item-people">
                    <span class="author">Steffen&nbsp;Zeuch</span>&nbsp;(DFKI GmbH),
                    <span class="author">Bonaventura&nbsp;Del&nbsp;Monte</span>&nbsp;(DFKI GmbH),
                    <span class="author">Jeyhun&nbsp;Karimov</span>&nbsp;(DFKI GmbH),
                    <span class="author">Clemens&nbsp;Lutz</span>&nbsp;(DFKI GmbH),
                    <span class="author">Manuel&nbsp;Renz</span>&nbsp;(DFKI GmbH),
                    <span class="author">Jonas&nbsp;Traub</span>&nbsp;(Technische Universität Berlin),
                    <span class="author">Sebastian&nbsp;Breß</span>&nbsp;(DFKI GmbH),
                    <span class="author">Tilmann&nbsp;Rabl</span>&nbsp;(DFKI GmbH), and
                    <span class="author">Volker&nbsp;Markl</span>&nbsp;(Technische Universität Berlin)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Modern Stream Processing Engines (SPEs) process large data volumes under tight latency constraints. Many SPEs execute processing pipelines using message passing on shared-nothing architectures and apply a partition-based scale-out strategy to handle high-velocity input streams. Furthermore, many state-of-the-art SPEs rely on a Java Virtual Machine to achieve platform independence and speed up system development by abstracting from the underlying hardware. In this paper, we show that taking the underlying hardware into account is essential to exploit modern hardware efficiently. To this end, we conduct an extensive experimental analysis of current SPEs and SPE design alternatives optimized for modern hardware. Our analysis highlights potential bottlenecks and reveals that state-of-the-art SPEs are not capable of fully exploiting current and emerging hardware trends, such as multi-core processors and high-speed networks. Based on our analysis, we describe a set of design changes to the common architecture of SPEs to scale-up on modern hardware. We show that the single-node throughput can be increased by up to two orders of magnitude compared to state-of-the-art SPEs by applying specialized code generation, fusing operators, batch-style parallelization strategies, and optimized windowing. This speedup allows for deploying typical streaming applications on a single or a few nodes instead of large clusters.
                </span>

            </p>

            <p class="schedule-item" data-id="574">
                <strong class="schedule-item-title" data-num="8.3">Accelerating Generalized Linear Models with MLWeaving: A One-Size-Fits-All System for Any-precision Learning</strong>
                <span class="schedule-item-people">
                    <span class="author">Zeke&nbsp;Wang</span>&nbsp;(ETH Zurich),
                    <span class="author">Kaan&nbsp;Kara</span>&nbsp;(ETH Zurich),
                    <span class="author">Hantian&nbsp;Zhang</span>&nbsp;(ETH Zurich),
                    <span class="author">Gustavo&nbsp;Alonso</span>&nbsp;(ETH Zurich),
                    <span class="author">Onur&nbsp;Mutlu</span>&nbsp;(ETH Zurich), and
                    <span class="author">Ce&nbsp;Zhang</span>&nbsp;(ETH Zurich)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Learning from the data stored in a database is an important function increasingly available in relational engines. Methods using lower precision input data are of special interest given their overall higher efficiency. However, in databases, these methods have a hidden cost: the quantization of the real value into a smaller number is an expensive step. To address this issue, we present MLWeaving, a data structure and hardware acceleration technique intended to speed up learning of generalized linear models over low precision data. MLWeaving provides a compact in-memory representation that enables the retrieval of data at any level of precision. MLWeaving also provides a highly efficient implementation of stochastic gradient descent on FPGAs and enables the dynamic tuning of precision, instead of using a fixed precision level during learning. Experimental results show that MLWeaving converges up to 16× faster than low-precision implementations of first-order methods on CPUs.
                </span>

            </p>

            <p class="schedule-item" data-id="1140">
                <strong class="schedule-item-title" data-num="8.4">Crossbow: Scaling Deep Learning with Small Batch Sizes on Multi-GPU Servers</strong>
                <span class="schedule-item-people">
                    <span class="author">Alexandros&nbsp;Koliousis</span>&nbsp;(Imperial College London),
                    <span class="author">Pijika&nbsp;Watcharapichat</span>&nbsp;(Microsoft Research),
                    <span class="author">Matthias&nbsp;Weidlich</span>&nbsp;(Humboldt-Universität zu Berlin),
                    <span class="author">Luo&nbsp;Mai</span>&nbsp;(Imperial College London),
                    <span class="author">Paolo&nbsp;Costa</span>&nbsp;(Microsoft Research), and
                    <span class="author">Peter&nbsp;Pietzuch</span>&nbsp;(Imperial College London)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Deep learning models are trained on servers with many GPUs, and training must scale with the number of GPUs. Systems such as TensorFlow and Caffe2 train models with parallel synchronous stochastic gradient descent: they process a batch of training data at a time, partitioned across GPUs, and average the resulting partial gradients to obtain an updated global model. To fully utilise all GPUs, systems must increase the batch size, which hinders statistical efficiency. Users tune hyper-parameters such as the learning rate to compensate for this, which is complex and model-specific. We describe CROSSBOW, a new single-server multi-GPU system for training deep learning models that enables users to freely choose their preferred batch size—however small—while scaling to multiple GPUs. CROSSBOW uses many parallel model replicas and avoids reduced statistical efficiency through a new synchronous training method. We introduce SMA, a synchronous variant of model averaging in which replicas independently explore the solution space with gradient descent, but adjust their search synchronously based on the trajectory of a globally-consistent average model. CROSSBOW achieves high hardware efficiency with small batch sizes by potentially training multiple model replicas per GPU, automatically tuning the number of replicas to maximise throughput. Our experiments show that CROSSBOW improves the training time of deep learning models on an 8-GPU server by 1.3-4× compared to TensorFlow.
                </span>

            </p>

            <p class="schedule-item" data-id="383">
                <strong class="schedule-item-title" data-num="8.5">ColumnML: Column-Store Machine Learning with On-The-Fly Data Transformation</strong>
                <span class="schedule-item-people">
                    <span class="author">Kaan&nbsp;Kara</span>&nbsp;(ETH Zurich),
                    <span class="author">Ken&nbsp;Eguro</span>&nbsp;(Microsoft),
                    <span class="author">Ce&nbsp;Zhang</span>&nbsp;(ETH Zurich), and
                    <span class="author">Gustavo&nbsp;Alonso</span>&nbsp;(ETH Zurich)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The ability to perform machine learning (ML) tasks in a database management system (DBMS) provides the data analyst with a powerful tool. Unfortunately, integration of ML into a DBMS is challenging for reasons varying from differences in execution model to data layout requirements. In this paper, we assume a column-store main-memory DBMS, optimized for online analytical processing, as our initial system. On this system, we explore the integration of coordinate-descent based methods working natively on columnar format to train generalized linear models. We use a cache-efficient, partitioned stochastic coordinate descent algorithm providing linear throughput scalability with the number of cores while preserving convergence quality, up to 14 cores in our experiments. Existing column oriented DBMS rely on compression and even encryption to store data in memory. When those features are considered, the performance of a CPU based solution suffers. Thus, in the paper we also show how to exploit hardware acceleration as part of a hybrid CPU+FPGA system to provide on-the-fly data transformation combined with an FPGA-based coordinate-descent engine. The resulting system is a column-store DBMS with its important features preserved (e.g., data compression) that offers high performance machine learning capabilities.
                </span>

            </p>


        </div>

        <div>
            <div data-day="3">
                <abbr long="Wednesday" short="Wed"></abbr>
                <p><strong>28</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Research_Session_9">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 9: Distributed Systems I</strong>
                <span class="schedule-chair">Chaired by <em>Hakan Hacigumus</em> (Google, USA) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1143">
                <strong class="schedule-item-title" data-num="9.1">Hillview: A trillion-cell spreadsheet for big data</strong>
                <span class="schedule-item-people">
                    <span class="author">Mihai&nbsp;Budiu</span>&nbsp;(VMware Research),
                    <span class="author">Parikshit&nbsp;Gopalan</span>&nbsp;(VMware Research),
                    <span class="author">Lalith&nbsp;Suresh</span>&nbsp;(VMware Research),
                    <span class="author">Udi&nbsp;Wieder</span>&nbsp;(VMware Research),
                    <span class="author">Han&nbsp;Kruiger</span>&nbsp;(University of Groningen), and
                    <span class="author">Marcos&nbsp;K.&nbsp;Aguilera</span>&nbsp;(VMware Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Hillview is a distributed spreadsheet for browsing very large datasets that cannot be handled by a single machine. As a spreadsheet, Hillview provides a high degree of interactivity that permits data analysts to explore information quickly along many dimensions while switching visualizations on a whim. To provide the required responsiveness, Hillview introduces visualization sketches, or vizketches, as a simple idea to produce compact data visualizations. Vizketches combine algorithmic techniques for data summarization with computer graphics principles for efficient rendering. While simple, vizketches are effective at scaling the spreadsheet by parallelizing computation, reducing communication, providing progressive visualizations, and offering precise accuracy guarantees. Using Hillview running on eight servers, we can navigate and visualize datasets of tens of billions of rows and trillions of cells, much beyond the published capabilities of competing systems.
                </span>

            </p>

            <p class="schedule-item" data-id="703">
                <strong class="schedule-item-title" data-num="9.2">Yugong: Geo-Distributed Data and Job Placement at Scale</strong>
                <span class="schedule-item-people">
                    <span class="author">Yuzhen&nbsp;Huang</span>&nbsp;(The Chinese University of Hong Kong, Alibaba Group),
                    <span class="author">Yingjie&nbsp;Shi</span>&nbsp;(Alibaba Group),
                    <span class="author">Zheng&nbsp;Zhong</span>&nbsp;(The Chinese University of Hong Kong, Alibaba Group),
                    <span class="author">Yihui&nbsp;Feng</span>&nbsp;(Alibaba Group),
                    <span class="author">James&nbsp;Cheng</span>&nbsp;(The Chinese University of Hong Kong),
                    <span class="author">Jiwei&nbsp;Li</span>&nbsp;(Alibaba Group),
                    <span class="author">Haochuan&nbsp;Fan</span>&nbsp;(Alibaba Group),
                    <span class="author">Chao&nbsp;Li</span>&nbsp;(Alibaba Group),
                    <span class="author">Tao&nbsp;Guan</span>&nbsp;(Alibaba Group), and
                    <span class="author">Jingren&nbsp;Zhou</span>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Companies like Alibaba operate tens of data centers (DCs) across geographically distributed locations. These DCs collectively provide the storage space and computing power for the company, storing EBs of data and serving millions of batch analytics jobs every day. In Alibaba, as our businesses grow, there are more and more cross-DC dependencies caused by jobs reading data from remote DCs. Consequently, the precious wide area network bandwidth becomes a major bottleneck for operating geo-distributed DCs at scale. In this paper, we present Yugong --- a system that manages data placement and job placement in Alibaba's geo-distributed DCs, with the objective to minimize cross-DC bandwidth usage. Yugong uses three methods, namely project placement, table replication, and job outsourcing, to address the issues of high bandwidth consumption across the DCs. We give the details of Yugong's design and implementation for the three methods, and describe how it cooperates with other systems (e.g., Alibaba's big data analytics platform and cluster scheduler) to improve the productivity of the DCs. We also report comprehensive performance evaluation results, which validate the design of Yugong and show that significant reduction in cross-DC bandwidth usage has been achieved.
                </span>

            </p>

            <p class="schedule-item" data-id="1100">
                <strong class="schedule-item-title" data-num="9.3">Hyper Dimension Shuffle: Efficient Data Repartition at Petabyte Scale in SCOPE</strong>
                <span class="schedule-item-people">
                    <span class="author">Shi&nbsp;Qiao</span>&nbsp;(Microsoft),
                    <span class="author">Adrian&nbsp;Nicoara</span>&nbsp;(Microsoft),
                    <span class="author">Jin&nbsp;Sun</span>&nbsp;(Microsoft),
                    <span class="author">Marc&nbsp;T.&nbsp;Friedman</span>&nbsp;(Microsoft),
                    <span class="author">Hiren&nbsp;Patel</span>&nbsp;(Microsoft), and
                    <span class="author">Jaliya&nbsp;Ekanayake</span>&nbsp;(Microsoft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In distributed query processing, data shuffle is one of the most costly operations. We examined scaling limitations to data shuffle that current systems and the research literature do not solve. As the number of input and output partitions increases, naïve shuffling will result in high fan-out and fan-in. There are practical limits to fan-out, as a consequence of limits on memory buffers, network ports and I/O handles. There are practical limits to fan-in because it multiplies the communication errors due to faults in commodity clusters impeding progress. Existing solutions that limit fan-out and fan-in do so at the cost of scaling quadratically in the number of nodes in the data flow graph. This dominates the costs of shuffling large datasets. We propose a novel algorithm called Hyper Dimension Shuffle that we have introduced in production in SCOPE, Microsoft's internal big data analytics system. Hyper Dimension Shuffle is inspired by the divide and conquer concept, and utilizes a recursive partitioner with intermediate aggregations. It yields quasilinear complexity of the shuffling graph with tight guarantees on fan-out and fan-in. We demonstrate how it avoids the shuffling graph blowup of previous algorithms to shuffle at petabyte-scale efficiently on both synthetic benchmarks and real applications.
                </span>

            </p>

            <p class="schedule-item" data-id="575">
                <strong class="schedule-item-title" data-num="9.4">Declarative Recursive Computation on an RDBMS, or, Why You Should Use a Database For Distributed Machine Learning</strong>
                <span class="schedule-item-people">
                    <span class="author">Dimitrije&nbsp;Jankov</span>&nbsp;(Rice University),
                    <span class="author">Shangyu&nbsp;Luo</span>&nbsp;(Rice University),
                    <span class="author">Binhang&nbsp;Yuan</span>&nbsp;(Rice University),
                    <span class="author">Zhuhua&nbsp;Cai</span>&nbsp;(Rice University),
                    <span class="author">Jia&nbsp;Zou</span>&nbsp;(Rice university),
                    <span class="author">Chris&nbsp;Jermaine</span>&nbsp;(Rice University), and
                    <span class="author">Zekai&nbsp;J&nbsp;Gao</span>&nbsp;(Rice University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A number of popular systems, most notably Google's TensorFlow, have been implemented from the ground up to support machine learning tasks. We consider how to make a very small set of changes to a modern relational database management system (RDBMS) to make it suitable for distributed learning computations. Changes include adding better support for recursion, and optimization and execution of very large compute plans. We also show that there are key advantages to using an RDBMS as a machine learning platform. In particular, learning based on a database management system allows for trivial scaling to large data sets and especially large models, where different computational units operate on different parts of a model that may be too large to fit into RAM.
                </span>

            </p>

            <p class="schedule-item" data-id="665">
                <strong class="schedule-item-title" data-num="9.5">Procella: Unifying serving and analytical data at YouTube</strong>
                <span class="schedule-item-people">
                    <span class="author">Biswapesh&nbsp;Chattopadhyay</span>&nbsp;(Google LLC),
                    <span class="author">Priyam&nbsp;Dutta</span>&nbsp;(Google LLC),
                    <span class="author">Weiran&nbsp;Liu</span>&nbsp;(Google LLC),
                    <span class="author">Ott&nbsp;Tinn</span>&nbsp;(Google LLC),
                    <span class="author">Andrew&nbsp;Mccormick</span>&nbsp;(Google LLC),
                    <span class="author">Aniket&nbsp;Mokashi</span>&nbsp;(Google LLC),
                    <span class="author">Paul&nbsp;Harvey</span>&nbsp;(Google LLC),
                    <span class="author">Hector&nbsp;Gonzalez</span>&nbsp;(Google LLC),
                    <span class="author">David&nbsp;Lomax</span>&nbsp;(Google LLC),
                    <span class="author">Sagar&nbsp;Mittal</span>&nbsp;(Google LLC),
                    <span class="author">Roee&nbsp;Ebenstein</span>&nbsp;(Google LLC),
                    <span class="author">Nikita&nbsp;Mikhaylin</span>&nbsp;(Google LLC),
                    <span class="author">Hung-ching&nbsp;Lee</span>&nbsp;(Google LLC),
                    <span class="author">Xiaoyan&nbsp;Zhao</span>&nbsp;(Google LLC),
                    <span class="author">Tony&nbsp;Xu</span>&nbsp;(Google LLC),
                    <span class="author">Luis&nbsp;Perez</span>&nbsp;(Google LLC),
                    <span class="author">Farhad&nbsp;Shahmohammadi</span>&nbsp;(Google LLC),
                    <span class="author">Tran&nbsp;Bui</span>&nbsp;(Google LLC),
                    <span class="author">Neil&nbsp;McKay</span>&nbsp;(Google LLC),
                    <span class="author">Selcuk&nbsp;Aya</span>&nbsp;(Google LLC),
                    <span class="author">Vera&nbsp;Lychagina</span>&nbsp;(Google LLC), and
                    <span class="author">Brett&nbsp;Elliott</span>&nbsp;(Google LLC)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Large organizations like YouTube are dealing with exploding data volume and increasing demand for data driven applications. Broadly, these can be categorized as: reporting and dashboarding, embedded statistics in pages, time-series monitoring, and ad-hoc analysis. Typically, organizations build specialized infrastructure for each of these use cases. This, however, creates silos of data and processing, and results in a complex, expensive, and harder to maintain infrastructure. At YouTube, we solved this problem by building a new SQL query engine -- Procella. Procella implements a super-set of capabilities required to address all of the four use cases above, with high scale and performance, in a single product. Today, Procella serves hundreds of billion of queries per day across all four workloads at YouTube and several other Google product areas.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_10">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 10: Graph Analytics I</strong>
                <span class="schedule-chair">Chaired by <em>Arijit Khan</em> (Nanyang Technological University, Singapore) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="568">
                <strong class="schedule-item-title" data-num="10.1">Deducing Certain Fixes to Graphs</strong>
                <span class="schedule-item-people">
                    <span class="author">Wenfei&nbsp;Fan</span>&nbsp;(University of Edinburgh, Beihang University, Shenzhen University),
                    <span class="author">Ping&nbsp;Lu</span>&nbsp;(Beihang Univ.),
                    <span class="author">Chao&nbsp;Tian</span>&nbsp;(Alibaba Group), and
                    <span class="author">Jingren&nbsp;Zhou</span>&nbsp;(Alibaba Group)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    This paper proposes to deduce certain fixes to graphs G based on data quality rules Σ and ground truth Γ (i.e., validated attribute values and entity matches). We fix errors detected by Σ in G such that the fixes are assured correct as long as Σ and Γ are correct. We deduce certain fixes in two paradigms. (a) We interact with users and "incrementally" fix errors online. Whenever users pick a small set V_0 of nodes in G, we fix all errors pertaining to V_0 and accumulate ground truth in the process. (b) Based on accumulated Γ, we repair the entire graph G offline; while this may not correct all errors in G, all fixes are guaranteed certain. We develop techniques for deducing certain fixes. (1) We define data quality rules to support conditional functional dependencies, recursively defined keys and negative rules on graphs, such that we can deduce fixes by combining data repairing and object identification. (2) We show that deducing certain fixes is Church-Rosser, i.e. the deduction converges at the same fixes regardless of the order of rules applied. (3) We establish the complexity of three fundamental problems associated with certain fixes. (4) We provide (parallel) algorithms for deducing certain fixes online and offline, and guarantee to reduce running time when given more processors. Using real-life and synthetic data, we experimentally verify the effectiveness and scalability of our methods.
                </span>

            </p>

            <p class="schedule-item" data-id="497">
                <strong class="schedule-item-title" data-num="10.2">Certus: An Effective Entity Resolution Approach with Graph Differential Dependencies (GDDs)</strong>
                <span class="schedule-item-people">
                    <span class="author">Selasi&nbsp;Kwashie</span>&nbsp;(University of South Australia),
                    <span class="author">Jixue&nbsp;Liu</span>&nbsp;(University of South Australia),
                    <span class="author">Jiuyong&nbsp;Li</span>&nbsp;(University of South Australia),
                    <span class="author">Lin&nbsp;Liu</span>&nbsp;(University of South Australia),
                    <span class="author">Markus&nbsp;Stumptner</span>&nbsp;(University of South Australia), and
                    <span class="author">Lujing&nbsp;Yang</span>&nbsp;(University of South Australia)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Entity resolution (ER) is the problem of accurately identifying multiple, differing, and possibly contradicting representations of unique real-world entities in data. It is a challenging and fundamental task in data cleansing and data integration. In this work, we propose graph differential dependencies (GDDs) as an extension of the recently developed graph entity dependencies (which are formal constraints for graph data) to enable approximate matching of values. Furthermore, we investigate a special discovery of GDDs for ER by designing an algorithm for generating a non-redundant set of GDDs in labelled data. Then, we develop an effective ER technique, Certus, that employs the learned GDDs for improving the accuracy of ER results. We perform extensive empirical evaluation of our proposals on five real-world ER benchmark datasets and a proprietary database to test their effectiveness and efficiency. The results from the experiments show the discovery algorithm and Certus are efficient; and more importantly, GDDs significantly improve the precision of ER without considerable trade-off of recall.
                </span>

            </p>

            <p class="schedule-item" data-id="1166">
                <strong class="schedule-item-title" data-num="10.3">Efficient Algorithms for Densest Subgraph Discovery</strong>
                <span class="schedule-item-people">
                    <span class="author">Yixiang&nbsp;Fang</span>&nbsp;(Guangzhou University),
                    <span class="author">Kaiqiang&nbsp;Yu</span>&nbsp;(The University of Hong Kong),
                    <span class="author">Reynold&nbsp;Cheng</span>&nbsp;(The University of Hong Kong),
                    <span class="author">Laks&nbsp;V.S.&nbsp;Lakshmanan</span>&nbsp;(The University of British Columbia), and
                    <span class="author">Xuemin&nbsp;Lin</span>&nbsp;(University of New South Wales)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Densest subgraph discovery (DSD) is a fundamental problem in graph mining. It has been studied for decades, and is widely used in various areas, including network science, biological analysis, and graph databases. Given a graph G, DSD aims to find a subgraph D of G with the highest density (e.g., the number of edges over the number of vertices in D). Because DSD is difficult to solve, we propose a new solution paradigm in this paper. Our main observation is that the densest subgraph can be accurately found through a k-core (a kind of dense subgraph of G), with theoretical guarantees. Based on this intuition, we develop efficient exact and approximation solutions for DSD. Moreover, our solutions are able to find the densest subgraphs for a wide range of graph density definitions, including clique-based- and general pattern-based density. We have performed extensive experimental evaluation on both real and synthetic datasets. Our results show that our algorithms are up to four orders of magnitude faster than existing approaches.
                </span>

            </p>

            <p class="schedule-item" data-id="386">
                <strong class="schedule-item-title" data-num="10.4">Beyond Macrobenchmarks: Microbenchmark-based Graph Database Evaluation</strong>
                <span class="schedule-item-people">
                    <span class="author">Matteo&nbsp;Lissandrini</span>&nbsp;(Aalborg University),
                    <span class="author">Martin&nbsp;Brugnara</span>&nbsp;(University of Trento), and
                    <span class="author">Yannis&nbsp;Velegrakis</span>&nbsp;(Utrecht University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Despite the increasing interest in graph databases their requirements and specifications are not yet fully understood by everyone, leading to a great deal of variation in the supported functionalities and the achieved performances. In this work, we provide a comprehensive study of the existing graph database systems. We introduce a novel micro-benchmarking framework that provides insights on their performance that go beyond what macro-benchmarks can offer. The framework includes the largest set of queries and operators so far considered. The graph database systems are evaluated on synthetic and real data, from different do- mains, and at scales much larger than any previous work. The framework is materialized as an open-source suite and is easily extended to new datasets, systems, and queries.
                </span>

            </p>

            <p class="schedule-item" data-id="382">
                <strong class="schedule-item-title" data-num="10.5">Utility-Driven Graph Summarization</strong>
                <span class="schedule-item-people">
                    <span class="author">K.&nbsp;Ashwin&nbsp;Kumar</span>&nbsp;(Symantec Research Labs) and
                    <span class="author">Petros&nbsp;Efstathopoulos</span>&nbsp;(Symantec Research Labs)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A lot of the large datasets analyzed today represent graphs. In many real-world applications, summarizing large graphs is beneficial (or necessary) so as to reduce a graph's size and, thus, achieve a number of benefits, including but not limited to 1) significant speed-up for graph algorithms, 2) graph storage space reduction, 3) faster network transmission, 4) improved data privacy, 5) more effective graph visualization, etc. During the summarization process, potentially useful information is removed from the graph (nodes and edges are removed or transformed). Consequently, one important problem with graph summarization is that, although it reduces the size of the input graph, it also adversely affects and reduces its utility. The key question that we pose in this paper is, "can we summarize and compress a graph while ensuring that its utility or usefulness does not drop below a certain user-specified utility threshold?" We explore this question and propose a novel iterative utility- driven graph summarization approach. During iterative summarization, we incrementally keep track of the utility of the graph summary. This enables a user to query a graph summary that is conditioned on a user-specified utility value. We present both exhaustive and scalable approaches for implementing our proposed solution. Our experimental results on real-world graph datasets show the effectiveness of our proposed approach. Finally, through multiple real-world applications we demonstrate the practicality of our notion of utility of the computed graph summary.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_11">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 11: Stream Processing and Analysis</strong>
                <span class="schedule-chair">Chaired by <em>Nick Koudas</em> (University of Toronto, Canada) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="389">
                <strong class="schedule-item-title" data-num="11.1">Stream Frequency Over Interval Queries</strong>
                <span class="schedule-item-people">
                    <span class="author">Ran&nbsp;Ben&nbsp;Basat</span>&nbsp;(Harvard University),
                    <span class="author">Roy&nbsp;Friedman</span>&nbsp;(Technion), and
                    <span class="author">Rana&nbsp;Shahout</span>&nbsp;(Technion)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Stream frequency measurements are fundamental in many data stream applications such as financial data trackers, intrusion-detection systems, and network monitoring. Typically, recent data items are more relevant than old ones, a notion we can capture through a sliding window abstraction. This paper considers a generalized sliding window model that supports stream frequency queries over an interval given at query time. This enables drill-down queries, in which we can examine the behavior of the system in finer and finer granularities. For this model, we asymptotically improve the space bounds of existing work, reduce the update and query time to a constant, and provide deterministic solutions. When evaluated over real Internet packet traces, our fastest algorithm processes items 90-250 times faster, serves queries at least 730 times quicker and consumes at least 40% less space than the best known method.
                </span>

            </p>

            <p class="schedule-item" data-id="354">
                <strong class="schedule-item-title" data-num="11.2">SWIFT: Mining Representative Patterns from Large Event Streams</strong>
                <span class="schedule-item-people">
                    <span class="author">Yizhou&nbsp;Yan</span>&nbsp;(Worcester Polytechnic Institute),
                    <span class="author">Lei&nbsp;Cao</span>&nbsp;(MIT),
                    <span class="author">Samuel&nbsp;Madden</span>&nbsp;(MIT), and
                    <span class="author">Elke&nbsp;Rundensteiner</span>&nbsp;(Worcester Polytechnic Institute)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Event streams generated by smart devices common in modern Internet of Things applications must be continuously mined to monitor the behavior of the underlying system. In this work, we propose a stream pattern mining system for supporting online IoT applications. First, to solve the pattern explosion problem of existing stream pattern mining strategies, we now design pattern semantics that continuously produce a compact set of patterns that maximumly compresses the dynamic data streams, called MDL-based Representative Patterns (MRP). We then design a one-pass SWIFT approach that continuously mines the up-to-date MRP pattern set for each stream window upon the arrival or expiration of individual events. We show that SWIFT is guaranteed to select the update operation for each individual incoming event that leads to the most compact encoding of the sequence in the current window. We further enhance SWIFT to support batch updates, called B-SWIFT. B-SWIFT adopts a lazy update strategy that guarantees that only the minimal number of operations are conducted to process an incoming event batch for MRP pattern mining. Evaluation by our industry lighting lab collaborator demonstrates that SWIFT successfully solves their use cases and finds more representative patterns than the alternative approaches adapting the state-of-the-art static representative pattern mining methods. Our experimental study confirms that SWIFT outperforms the best existing method up to 50% in the compactness of produced pattern encodings, while providing a 4 orders of magnitude speedup.
                </span>

            </p>

            <p class="schedule-item" data-id="1112">
                <strong class="schedule-item-title" data-num="11.3">Optimal and General Out-of-Order Sliding-Window Aggregation</strong>
                <span class="schedule-item-people">
                    <span class="author">Kanat&nbsp;Tangwongsan</span>&nbsp;(Mahidol University International College),
                    <span class="author">Martin&nbsp;Hirzel</span>&nbsp;(IBM Research), and
                    <span class="author">Scott&nbsp;Schneider</span>&nbsp;(IBM Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Sliding-window aggregation derives a user-defined summary of the most-recent portion of a data stream. For in-order streams, each window change can be handled in O(1) time even when the aggregation operator is not invertible. But streaming data often arrive inherently out-of-order, e.g., due to clock drifts and communication delays. For such streams, prior work resorted to latency-prone buffering or spent O(log n) time for every window change, where n is the instantaneous window size. This paper presents FiBA, a novel real-time sliding window aggregation algorithm that optimally handles streams of varying degrees of out-of-orderness. FiBA is as general as the state-of-the-art and supports variable-sized windows. An insert or evict takes amortized O(log d) time, where d is the distance of the change to the window's boundary. This means O(1) time for in-order arrivals and nearly O(1) time for slightly out-of-order arrivals, tending to O(log n) time for the most severely out-of-order arrivals. We also prove a matching lower bound, showing optimality. At its heart, the algorithm combines and extends finger searching, lazy rebalancing, and position-aware partial aggregates. Further, FiBA can answer range queries that aggregate subwindows for window sharing. Finally, our experiments show that FiBA performs well in practice and conforms to the theoretical findings, with significantly higher throughput than O(log n) algorithms.
                </span>

            </p>

            <p class="schedule-item" data-id="1048">
                <strong class="schedule-item-title" data-num="11.4">From Anomaly Detection to Rumour Detection using Data Streams of Social Platforms</strong>
                <span class="schedule-item-people">
                    <span class="author">Thanh&nbsp;Tam&nbsp;Nguyen</span>&nbsp;(Ecole Polytechnique Federale de Lausanne),
                    <span class="author">Matthias&nbsp;Weidlich</span>&nbsp;(Humboldt-Universität zu Berlin),
                    <span class="author">Bolong&nbsp;Zheng</span>&nbsp;(Huazhong University of Science and Technology),
                    <span class="author">Hongzhi&nbsp;Yin</span>&nbsp;(The University of Queensland),
                    <span class="author">Nguyen&nbsp;Quoc&nbsp;Viet&nbsp;Hung</span>&nbsp;(Griffith University), and
                    <span class="author">Bela&nbsp;Stantic</span>&nbsp;(Griffith University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Social platforms became a major source of rumours. While rumours can have severe real-world implications, their detection is notoriously hard: Content on social platforms is short and lacks semantics; it spreads quickly through a dynamically evolving network; and without considering the context of content, it may be impossible to arrive at a truthful interpretation. Traditional approaches to rumour detection, however, exploit solely a single content modality, e.g., social media posts, which limits their detection accuracy. In this paper, we cope with the aforementioned challenges by means of a multi-modal approach to rumour detection that identifies anomalies in both, the entities (e.g., users, posts, and hashtags) of a social platform and their relations. Based on local anomalies, we show how to detect rumours at the network level, following a graph-based scan approach. In addition, we propose incremental methods, which enable us to detect rumours using streaming data of social platforms. We illustrate the effectiveness and efficiency of our approach with a real-world dataset of 4M tweets with more than 1000 rumours.
                </span>

            </p>

            <p class="schedule-item" data-id="1124">
                <strong class="schedule-item-title" data-num="11.5">Real-time Distributed Co-Movement Pattern Detection on Streaming Trajectories</strong>
                <span class="schedule-item-people">
                    <span class="author">Lu&nbsp;Chen</span>&nbsp;(Aalborg University, Denmark),
                    <span class="author">Yunjun&nbsp;Gao</span>&nbsp;(Zhejiang University),
                    <span class="author">Ziquan&nbsp;Fang</span>&nbsp;(Zhejiang University),
                    <span class="author">Xiaoye&nbsp;Miao</span>&nbsp;(Zhejiang University),
                    <span class="author">Christian&nbsp;S&nbsp;Jensen</span>&nbsp;(Aalborg University), and
                    <span class="author">Chenjuan&nbsp;Guo</span>&nbsp;(Aalborg University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the widespread deployment of mobile devices with positioning capabilities, increasingly massive volumes of trajectory data are being collected that capture the movements of people and vehicles. This data enables co-movement pattern detection, which is important in applications such as trajectory compression and future-movement prediction. Existing co-movement pattern detection studies generally consider historical data and thus propose offline algorithms. However, applications such as future movement prediction need real-time processing over streaming trajectories. Thus, we investigate real-time distributed co-movement pattern detection over streaming trajectories. Existing off-line methods assume that all data is available when the processing starts. Nevertheless, in a streaming setting, unbounded data arrives in real time, making pattern detection challenging. To this end, we propose a framework based on Apache Flink, which is designed for efficient distributed streaming data processing. The framework encompasses two phases: clustering and pattern enumeration. To accelerate the clustering, we use a range join based on two-layer indexing, and provide techniques that eliminate unnecessary verifications. To perform pattern enumeration efficiently, we present two methods FBA and VBA that utilize id-based partitioning. When coupled with bit compression and candidate-based enumeration techniques, we reduce the enumeration cost from exponential to linear. Extensive experiments offer insight into the efficiency of the proposed framework and its constituent techniques compared with existing methods.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_12">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 12: Database Engines for New Hardware</strong>
                <span class="schedule-chair">Chaired by <em>Spyros Blanas</em> (The Ohio State University, USA) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1149">
                <strong class="schedule-item-title" data-num="12.1">Generating Application-specific Data Layouts for In-memory Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Cong&nbsp;Yan</span>&nbsp;(University of Washington) and
                    <span class="author">Alvin&nbsp;Cheung</span>&nbsp;(UC Berkeley)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Database applications are often developed with object-oriented languages while using relational databases as the backend. To accelerate these applications, developers would manually design customized data structures to store data in memory, and ways to utilize such data structures to answer queries. Doing so is brittle and requires a lot of effort. Alternatively, developers might automate the process by using relational physical design tools to create materialized views and indexes instead. However, the characteristics of object-oriented database applications are often distinct enough from traditional database applications such that classical relational query optimization techniques often cannot speed up queries that arise from such applications, as our experiments show. To address this, we build CHESTNUT, a data layout generator for in-memory object-oriented database applications. Given a memory budget, CHESTNUT generates customized in-memory data layouts and query plans to answer queries written using a subset of the Rails API, a common framework for building object-oriented database applications. CHESTNUT differs from traditional query optimizers and physical designers in two ways. First, CHESTNUT automatically generates data layouts that are customized for the application after analyzing their queries, hence CHESTNUT-generated data layouts are designed to be efficient to answer queries from such applications. Second, CHESTNUT uses a novel enumeration and verification-based algorithm to generate query plans that use such data layouts, rather than rule-based approaches as in traditional query optimizers. We evaluated CHESTNUT on four opensource Rails database applications. The result shows that it can reduce average query processing time by over 3.6× (and up to 42×), as compared to other in-memory relational database engines.
                </span>

            </p>

            <p class="schedule-item" data-id="1148">
                <strong class="schedule-item-title" data-num="12.2">DimmStore: Memory Power Optimization for Database Systems</strong>
                <span class="schedule-item-people">
                    <span class="author">Alexey&nbsp;Karyakin</span>&nbsp;(University of Waterloo) and
                    <span class="author">Kenneth&nbsp;Salem</span>&nbsp;(University of Waterloo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Memory can consume a substantial amount of power in database servers, yet memory power has received considerably less attention than CPU power. Memory power consumption is also highly non-proportional. Thus, memory power becomes even more significant in the common case in which a database server is either not completely busy or not completely full. In this paper, we study the application of two memory power optimization techniques - rank-aware allocation and rate-based layout - to database systems. By concentrating memory load, rather than spreading it out evenly, these techniques create and exploit memory idleness to achieve power savings. We have implemented these techniques in a prototype database system called DimmStore. DimmStore is part of a memory power testbed which includes customized hardware with direct power measurement capabilities, allowing us to measure the techniques' effectiveness. We use the testbed to empirically characterize the power saving opportunities provided by these techniques, as well as their performance impact, under YCSB and TPC-C workloads. Under simple YCSB workloads, power savings ranged up to 50%, depending on load and space utilization, with little performance impact. Savings were smaller, but still significant, for TPC-C, which has more complex data locality characteristics.
                </span>

            </p>

            <p class="schedule-item" data-id="1155">
                <strong class="schedule-item-title" data-num="12.3">Accelerating Raw Data Analysis with the ACCORDA Software and Hardware Architecture</strong>
                <span class="schedule-item-people">
                    <span class="author">Yuanwei&nbsp;Fang</span>&nbsp;(University of Chicago),
                    <span class="author">Chen&nbsp;Zou</span>&nbsp;(University of Chicago), and
                    <span class="author">Andrew&nbsp;Chien</span>&nbsp;(University of Chicago)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The data science revolution and growing popularity of data lakes make efficient processing of raw data increasingly important. To address this, we propose the ACCelerated Operators for Raw Data Analysis (ACCORDA) architecture. By extending the operator interface (subtype with encoding) and employing a uniform runtime worker model, ACCORDA integrates data transformation acceleration seamlessly, enabling a new class of encoding optimizations and robust high-performance raw data processing. Together, these key features preserve the software system architecture, empowering state-of-art heuristic optimizations to drive flexible data encoding for performance. ACCORDA derives performance from its software architecture, but depends critically on the acceleration of the Unstructured Data Processor (UDP) that is integrated into the memory-hierarchy, and accelerates data transformation tasks by 16x-21x (parsing, decompression) to as much as 160x (deserialization) compared to an x86 core. We evaluate ACCORDA using TPC-H queries on tabular data formats, exercising raw data properties such as parsing and data conversion. The ACCORDA system achieves 2.9x-13.2x speedups when compared to SparkSQL, reducing raw data processing overhead to a geomean of 1.2x (20%). In doing so, ACCORDA robustly matches or outperforms prior systems that depend on caching loaded data, while computing on raw, unloaded data. This performance benefit is robust across format complexity, query predicates, and selectivity (data statistics). ACCORDA's encoding-extended operator interface unlocks aggressive encoding-oriented optimizations that deliver 80% average performance increase over the 7 affected TPC-H queries.
                </span>

            </p>

            <p class="schedule-item" data-id="1200">
                <strong class="schedule-item-title" data-num="12.4">Everything You Always Wanted to Know About Compiled and Vectorized Queries But Were Afraid to Ask</strong>
                <span class="schedule-item-people">
                    <span class="author">Timo&nbsp;Kersten</span>&nbsp;(Technische Universitfät München),
                    <span class="author">Viktor&nbsp;Leis</span>&nbsp;(Technische Universitfät München),
                    <span class="author">Alfons&nbsp;Kemper</span>&nbsp;(Technische Universitfät München),
                    <span class="author">Thomas&nbsp;Neumann</span>&nbsp;(Technische Universitfät München),
                    <span class="author">Andrew&nbsp;Pavlo</span>&nbsp;(Carnegie Mellon University), and
                    <span class="author">Peter&nbsp;Boncz</span>&nbsp;(Centrum Wiskunde & Informatica)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The query engines of most modern database systems are either based on vectorization or data-centric code generation. These two state-of-the-art query processing paradigms are fundamentally different in terms of system structure and query execution code. Both paradigms were used to build fast systems. However, until today it is not clear which paradigm yields faster query execution, as many implementation-specific choices obstruct a direct comparison of architectures. In this paper, we experimentally compare the two models by implementing both within the same test system. This allows us to use for both models the same query processing algorithms, the same data structures, and the same parallelization framework to ultimately create an apples-to-apples comparison. We find that both are efficient, but have different strengths and weaknesses. Vectorization is better at hiding cache miss latency, whereas data-centric compilation requires fewer CPU instructions, which benefits cacheresident workloads. Besides raw, single-threaded performance, we also investigate SIMD as well as multi-core parallelization and different hardware architectures. Finally, we analyze qualitative differences as a guide for system architects
                </span>

            </p>

            <p class="schedule-item" data-id="1160">
                <strong class="schedule-item-title" data-num="12.5">Rethinking Database High Availability with RDMA Networks</strong>
                <span class="schedule-item-people">
                    <span class="author">Erfan&nbsp;Zamanian</span>&nbsp;(Brown University),
                    <span class="author">Xiangyao&nbsp;Yu</span>&nbsp;(MIT),
                    <span class="author">Michael&nbsp;Stonebraker</span>&nbsp;(MIT), and
                    <span class="author">Tim&nbsp;Kraska</span>&nbsp;(MIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Highly available database systems rely on data replication to tolerate machine failures. Both classes of existing replication algorithms, active-passive and active-active, were designed in a time when network was the dominant performance bottleneck. In essence, these techniques aim to minimize network communication between replicas at the cost of incurring more processing redundancy; a trade-off that suitably fitted the conventional wisdom of distributed database design. However, the emergence of next-generation networks with high throughput and low latency calls for revisiting these assumptions. In this paper, we first make the case that in modern RDMA-enabled networks, the bottleneck has shifted to CPUs, and therefore the existing network-optimized replication techniques are no longer optimal. We present Active-Memory Replication, a new high availability scheme that efficiently leverages RDMA to completely eliminate the processing redundancy in replication. Using Active-Memory, all replicas dedicate their processing power to executing new transactions, as opposed to performing redundant computation. Active-Memory maintains high availability and correctness in the presence of failures through an efficient RDMA-based undo-logging scheme. Our evaluation against active-passive and active-active schemes shows that Active-Memory is up to a factor of 2 faster than the second-best protocol on RDMA-based networks.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_13">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 13: Query Optimization</strong>
                <span class="schedule-chair">Chaired by <em>Johann-Christoph Freytag</em> (Humboldt-Universitat zu Berlin, Germany) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="346">
                <strong class="schedule-item-title" data-num="13.1">Towards a Learning Optimizer for Shared Clouds</strong>
                <span class="schedule-item-people">
                    <span class="author">Chenggang&nbsp;Wu</span>&nbsp;(UC Berkeley),
                    <span class="author">Alekh&nbsp;Jindal</span>&nbsp;(Microsoft),
                    <span class="author">Saeed&nbsp;Amizadeh</span>&nbsp;(Microsoft),
                    <span class="author">Hiren&nbsp;Patel</span>&nbsp;(Microsoft),
                    <span class="author">Wangchao&nbsp;le</span>&nbsp;(Microsoft),
                    <span class="author">Shi&nbsp;Qiao</span>&nbsp;(Microsoft), and
                    <span class="author">Sriram&nbsp;Rao</span>&nbsp;(Facebook)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Query optimizers are notorious for inaccurate cost estimates, leading to poor performance. The root of the problem lies in inaccurate cardinality estimates, i.e., the size of intermediate (and final) results in a query plan. These estimates also determine the resources consumed in modern shared cloud infrastructures. In this paper, we present CARDLEARNER, a machine learning based approach to learn cardinality models from previous job executions and use them to predict the cardinalities in future jobs. The key intuition in our approach is that shared cloud workloads are often recurring and overlapping in nature, and so we could learn cardinality models for overlapping subgraph templates. We discuss various learning approaches and show how learning a large number of smaller models results in high accuracy and explainability. We further present an exploration technique to avoid learning bias by considering alternate join orders and learning cardinality models over them. We describe the feedback loop to apply the learned models back to future job executions. Finally, we show a detailed evaluation of our models (up to 5 orders of magnitude less error), query plans (60% applicability), performance (up to 100% faster, 3× fewer resources), and exploration (optimal in few 10s of executions).
                </span>

            </p>

            <p class="schedule-item" data-id="1153">
                <strong class="schedule-item-title" data-num="13.2">Plan-Structured Deep Neural Network Models for Query Performance Prediction</strong>
                <span class="schedule-item-people">
                    <span class="author">Ryan&nbsp;C&nbsp;Marcus</span>&nbsp;(Brandeis University) and
                    <span class="author">Olga&nbsp;Papaemmanouil</span>&nbsp;(Brandeis University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Query performance prediction, the task of predicting a query's latency prior to execution, is a challenging problem in database management systems. Existing approaches rely on features and performance models engineered by human experts, but often fail to capture the complex interactions between query operators and input relations, and generally do not adapt naturally to workload characteristics and patterns in query execution plans. In this paper, we argue that deep learning can be applied to the query performance prediction problem, and we introduce a novel neural network architecture for the task: a plan-structured neural network. Our neural network architecture matches the structure of any optimizer-selected query execution plan and predict its latency with high accuracy, while eliminating the need for human-crafted input features. A number of optimizations are also proposed to reduce training overhead without sacrificing effectiveness. We evaluated our techniques on various workloads and we demonstrate that our approach can outperform the state-of-the-art in query performance prediction.
                </span>

            </p>

            <p class="schedule-item" data-id="1165">
                <strong class="schedule-item-title" data-num="13.3">Neo: A Learned Query Optimizer</strong>
                <span class="schedule-item-people">
                    <span class="author">Ryan&nbsp;C&nbsp;Marcus</span>&nbsp;(Brandeis University),
                    <span class="author">Parimarjan&nbsp;Negi</span>&nbsp;(MIT),
                    <span class="author">Hongzi&nbsp;Mao</span>&nbsp;(MIT),
                    <span class="author">Chi&nbsp;Zhang</span>&nbsp;(Brandeis University),
                    <span class="author">Mohammad&nbsp;Alizadeh</span>&nbsp;(MIT CSAIL),
                    <span class="author">Tim&nbsp;Kraska</span>&nbsp;(MIT),
                    <span class="author">Olga&nbsp;Papaemmanouil</span>&nbsp;(Brandeis University), and
                    <span class="author">Nesime&nbsp;Tatbul</span>&nbsp;(Intel Labs and MIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Query optimization is one of the most challenging problems in database systems. Despite the progress made over the past decades, query optimizers remain extremely complex components that require a great deal of hand-tuning for specific workloads and datasets. Motivated by this shortcoming and inspired by recent advances in applying machine learning to data management challenges, we introduce Neo (Neural Optimizer), a novel learning-based query optimizer that relies on deep neural networks to generate query executions plans. Neo bootstraps its query optimization model from existing optimizers and continues to learn from incoming queries, building upon its successes and learning from its failures. Furthermore, Neo naturally adapts to underlying data patterns and is robust to estimation errors. Experimental results demonstrate that Neo, even when bootstrapped from a simple optimizer like PostgreSQL, can learn a model that offers similar performance to state-of-the-art commercial optimizers, and in some cases even surpass them.
                </span>

            </p>

            <p class="schedule-item" data-id="1156">
                <strong class="schedule-item-title" data-num="13.4">Comparing Synopsis Techniques for Approximate Spatial Data Analysis</strong>
                <span class="schedule-item-people">
                    <span class="author">A.&nbsp;B.&nbsp;Siddique</span>&nbsp;(University of California, Riverside),
                    <span class="author">Ahmed&nbsp;Eldawy</span>&nbsp;(University of California, Riverside), and
                    <span class="author">Vagelis&nbsp;Hristidis</span>&nbsp;(UC Riverside)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The increasing amount of spatial data calls for new scalable query processing techniques. One of the techniques that are getting attention is data synopsis, which summarizes the data using samples or histograms and computes an approximate answer based on the synopsis. This general technique is used in selectivity estimation, clustering, partitioning, load balancing, and visualization, among others. This paper experimentally studies four spatial data synopsis techniques for three common data analysis problems, namely, selectivity estimation, k-means clustering, and spatial partitioning. We run an extensive experimental evaluation on both real and synthetic datasets of up to 2.7 billion records to study the trade-offs between the synopsis methods and their applicability in big spatial data analysis. For each of the three problems, we compare with baseline techniques that operate on the whole dataset and evaluate the synopsis generation time, the time for computing an approximate answer on the synopsis, and the accuracy of the result. We present our observations about when each synopsis technique performs best.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_14">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 14: Data Integration and Crowdsourcing</strong>
                <span class="schedule-chair">Chaired by <em>Letzia Tanca</em> (Politecnico di Milano, Itlay) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="429">
                <strong class="schedule-item-title" data-num="14.1">Meta-Mappings for Schema Mapping Reuse</strong>
                <span class="schedule-item-people">
                    <span class="author">Paolo&nbsp;Atzeni</span>&nbsp;(Roma Tre University),
                    <span class="author">Luigi&nbsp;Bellomarini</span>&nbsp;(Banca d'Italia),
                    <span class="author">Paolo&nbsp;Papotti</span>&nbsp;(Eurecom), and
                    <span class="author">Riccardo&nbsp;Torlone</span>&nbsp;(Roma Tre University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The definition of mappings between heterogeneous schemas is a critical activity of any database application. Existing tools provide high level interfaces for the discovery of correspondences between elements of schemas, but schema mappings need to be manually specified every time from scratch, even if the scenario at hand is similar to one that has already been addressed. The problem is that schema mappings are precisely defined over a pair of schemas and cannot directly be reused on different scenarios. We tackle this challenge by generalizing schema mappings as meta-mappings: formalisms that describe transformations between generic data structures called meta-schemas. We formally characterize schema mapping reuse and explain how meta-mappings are able to: (i) capture enterprise knowledge from previously defined schema mappings and (ii) use this knowledge to suggest new mappings. We develop techniques to infer metamappings from existing mappings, to organize them into a searchable repository, and to leverage the repository to propose to users mappings suitable for their needs. We study effectiveness and efficiency in an extensive evaluation over real-world scenarios and show that our system can infer, store, and search millions of meta-mappings in seconds.
                </span>

            </p>

            <p class="schedule-item" data-id="384">
                <strong class="schedule-item-title" data-num="14.2">Cost-efficient Data Acquisition on Online Data Marketplaces for Correlation Analysis</strong>
                <span class="schedule-item-people">
                    <span class="author">Yanying&nbsp;Li</span>&nbsp;(Stevens Institute of Technology),
                    <span class="author">Haipei&nbsp;Sun</span>&nbsp;(Stevens Institute of Technology),
                    <span class="author">Boxiang&nbsp;Dong</span>&nbsp;(Montclair State University), and
                    <span class="author">Hui&nbsp;(Wendy)&nbsp;Wang</span>&nbsp;(Stevens Institute of Technology)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Incentivized by the enormous economic profits, the data marketplace platform has been proliferated recently. In this paper, we consider the data marketplace setting where a data shopper would like to buy data instances from the data marketplace for correlation analysis of certain attributes. We assume that the data in the marketplace is dirty and not free. The goal is to find the data instances from a large number of datasets in the marketplace whose join result not only is of high-quality and rich join informativeness, but also delivers the best correlation between the requested attributes. To achieve this goal, we design DANCE, a middleware that provides the desired data acquisition service. DANCE consists of two phases: (1) In the off-line phase, it constructs a two-layer join graph from samples. The join graph includes the information of the datasets in the marketplace at both schema and instance levels; (2) In the on-line phase, it searches for the data instances that satisfy the constraints of data quality, budget, and join informativeness, while maximizing the correlation of source and target attribute sets. We prove that the complexity of the search problem is NP-hard, and design a heuristic algorithm based on Markov chain Monte Carlo (MCMC). Experiment results on two benchmark and one real datasets demonstrate the efficiency and effectiveness of our heuristic data acquisition algorithm.
                </span>

            </p>

            <p class="schedule-item" data-id="356">
                <strong class="schedule-item-title" data-num="14.3">Smurf: Self-Service String Matching Using Random Forests</strong>
                <span class="schedule-item-people">
                    <span class="author">Paul&nbsp;Suganthan&nbsp;G&nbsp;C</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">Adel&nbsp;Ardalan</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">AnHai&nbsp;Doan</span>&nbsp;(University of Wisconsin-Madison), and
                    <span class="author">Aditya&nbsp;Akella</span>&nbsp;(University of Wisconsin-Madison)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We argue that more attention should be devoted to developing self-service string matching (SM) solutions, which lay users can easily use. We show that Falcon, a self-service entity matching (EM) solution, can be applied to SM and is more accurate than current self-service SM solutions. However, Falcon often asks lay users to label many string pairs (e.g., 770-1050 in our experiments). This is expensive, can significantly compound labeling mistakes, and takes a long time. We developed Smurf, a self-service SM solution that reduces the labeling effort by 43-76%, yet achieves comparable F1 accuracy. The key to make Smurf possible is a novel solution to efficiently execute a random forest (that Smurf learns via active learning with the lay user) over two sets of strings. This solution uses RDBMS-style plan optimization to reuse computations across the trees in the forest. As such, Smurf significantly advances self-service SM and raises interesting future directions for self-service EM and scalable random forest execution over structured data.
                </span>

            </p>

            <p class="schedule-item" data-id="226">
                <strong class="schedule-item-title" data-num="14.4">Cost-Effective Data Annotation using Game-Based Crowdsourcing</strong>
                <span class="schedule-item-people">
                    <span class="author">Jingru&nbsp;Yang</span>&nbsp;(Renmin University of China),
                    <span class="author">Ju&nbsp;Fan</span>&nbsp;(Renmin University of China),
                    <span class="author">Zhewei&nbsp;Wei</span>&nbsp;(Renmin University of China),
                    <span class="author">Guoliang&nbsp;Li</span>&nbsp;(Tsinghua University),
                    <span class="author">Tongyu&nbsp;Liu</span>&nbsp;(Renmin University of China), and
                    <span class="author">Xiaoyong&nbsp;Du</span>&nbsp;(Renmin University of China)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Large-scale data annotation is indispensable for many applications, such as machine learning and data integration. However, existing annotation solutions either incur expensive cost for large datasets or produce noisy results. This paper introduces a cost-effective annotation approach, and focuses on the labeling rule generation problem that aims to generate high-quality rules to largely reduce the labeling cost while preserving quality. To address the problem, we first generate candidate rules, and then devise a game-based crowdsourcing approach CrowdGame to select high-quality rules by considering coverage and precision. CrowdGame employs two groups of crowd workers: one group answers rule validation tasks (whether a rule is valid) to play a role of rule generator, while the other group answers tuple checking tasks (whether the annotated label of a data tuple is correct) to play a role of rule refuter. We let the two groups play a two-player game: rule generator identifies high-quality rules with large coverage and precision, while rule refuter tries to refute its opponent rule generator by checking some tuples that provide enough evidence to reject rules covering the tuples. This paper studies the challenges in CrowdGame. The first is to balance the trade-off between coverage and precision. We define the loss of a rule by considering the two factors. The second is rule precision estimation. We utilize Bayesian estimation to combine both rule validation and tuple checking tasks. The third is to select crowdsourcing tasks to fulfill the game-based framework for minimizing the loss. We introduce a minimax strategy and develop efficient task selection algorithms. We conduct experiments on entity matching and relation extraction, and the results show that our method outperforms state-of-the-art solutions.
                </span>

            </p>

            <p class="schedule-item" data-id="385">
                <strong class="schedule-item-title" data-num="14.5">Cleaning Crowdsourced Labels Using Oracles For Statistical Classification</strong>
                <span class="schedule-item-people">
                    <span class="author">Mohamad&nbsp;Dolatshah</span>&nbsp;(Simon Fraser University),
                    <span class="author">Mathew&nbsp;Teoh</span>&nbsp;(Simon Fraser University),
                    <span class="author">Jiannan&nbsp;Wang</span>&nbsp;(Simon Fraser University), and
                    <span class="author">Jian&nbsp;Pei</span>&nbsp;(JD.com, Simon Fraser University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Nowadays, crowdsourcing is being widely used to collect training data for solving classification problems. However, crowdsourced labels are often noisy, and there is a performance gap between classification with noisy labels and classification with ground-truth labels. In this paper, we consider how to apply oracle-based label cleaning to reduce the gap. We propose TARS, a label-cleaning advisor that can provide two pieces of valuable advice for data scientists when they need to train or test a model using noisy labels. Firstly, in the model testing stage, given a test dataset with noisy labels, and a classification model, TARS can use the test data to estimate how well the model will perform w.r.t. ground-truth labels. Secondly, in the model training stage, given a training dataset with noisy labels, and a classification algorithm, TARS can determine which label should be sent to an oracle to clean such that the model can be improved the most. For the first advice, we propose an effective estimation technique, and study how to compute confidence intervals to bound its estimation error. For the second advice, we propose a novel cleaning strategy along with two optimization techniques, and illustrate that it is superior to the existing cleaning strategies. We evaluate TARS on both simulated and real-world datasets. The results show that (1) TARS can use noisy test data to accurately estimate a model's true performance for various evaluation metrics; and (2) TARS can improve the model accuracy by a larger margin than the existing cleaning strategies, for the same cleaning budget.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_15">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 15: New Architectures and Caching</strong>
                <span class="schedule-chair">Chaired by <em>Mohamed Eltabakh</em> (WPI, USA) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="427">
                <strong class="schedule-item-title" data-num="15.1">Efficient Data Ingestion and Query Processing for LSM-Based Storage Systems</strong>
                <span class="schedule-item-people">
                    <span class="author">Chen&nbsp;Luo</span>&nbsp;(University of California, Irvine) and
                    <span class="author">Michael&nbsp;Carey</span>&nbsp;(University of California, Irvine)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In recent years, the Log Structured Merge (LSM) tree has been widely adopted by NoSQL and NewSQL systems for its superior write performance. Despite its popularity, however, most existing work has focused on LSM-based key-value stores with only a single LSM-tree; auxiliary structures, which are critical for supporting ad-hoc queries, have received much less attention. In this paper, we focus on efficient data ingestion and query processing for general-purpose LSM-based storage systems. We first propose and evaluate a series of optimizations for efficient batched point lookups, significantly improving the range of applicability of LSM-based secondary indexes. We then present several new and efficient maintenance strategies for LSM-based storage systems. Finally, we have implemented and experimentally evaluated the proposed techniques in the context of the Apache AsterixDB system, and we present the results here.
                </span>

            </p>

            <p class="schedule-item" data-id="573">
                <strong class="schedule-item-title" data-num="15.2">DASH: Database Shadowing for Mobile DBMS</strong>
                <span class="schedule-item-people">
                    <span class="author">Youjip&nbsp;Won</span>&nbsp;(KAIST),
                    <span class="author">Sundoo&nbsp;Kim</span>&nbsp;(Hanyang University),
                    <span class="author">Juseong&nbsp;Yun</span>&nbsp;(Hanyang University),
                    <span class="author">DamQuang&nbsp;Tuan</span>&nbsp;(Hanyang University), and
                    <span class="author">Jiwon&nbsp;Seo</span>&nbsp;(Hanyang University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In this work, we propose Database Shadowing, or DASH, which is a new crash recovery technique for SQLite DBMS. DASH is a hybrid mixture of classical shadow paging and logging. DASH addresses four major issues in the current SQLite journal modes: the performance and write amplification issues of the rollback mode and the storage space requirement and tail latency issues of the WAL mode. DASH exploits two unique characteristics of SQLite: the database files are small and the transactions are entirely serialized. DASH consists of three key ingredients Aggregate Update, Atomic Exchange and Version Reset. Aggregate Update eliminates the redundant write overhead and the requirement to maintain multiple snapshots both of which are inherent in the out-of-place update. Atomic Exchange resolves the overhead of updating the locations of individual database pages exploiting order-preserving nature of the metadata update operation in modern filesystem. Version Reset makes the result of the Atomic Exchange durable without relying on expensive filesystem journaling. The salient aspect of DASH lies in its simplicity and compatibility with the legacy. DASH does not require any modifications in the underlying filesystem or the database organization. It requires only 451 LOC to implement. In Cyclomatic Complexity score, which represents software complexity, DASH renders 33% lower (simpler) mark than PERSIST and WAL modes of SQLite. We implement DASH for SQLite on Android and extensively evaluate it on widely used smartphone devices. DASH yields 4× performance gain over PERSIST mode (default journaling mode). Compared to WAL mode (the fastest journaling mode), DASH uses only 2.5% of the storage space on average. The transaction latency of DASH at 99.9% is one fourth of that of WAL mode.
                </span>

            </p>

            <p class="schedule-item" data-id="1109">
                <strong class="schedule-item-title" data-num="15.3">Block as a Value for SQL over NoSQL</strong>
                <span class="schedule-item-people">
                    <span class="author">Yang&nbsp;Cao</span>&nbsp;(University of Edinburgh),
                    <span class="author">Wenfei&nbsp;Fan</span>&nbsp;(Univ. of Edinburgh & Beihang Univ.), and
                    <span class="author">Tengfei&nbsp;Yuan</span>&nbsp;(University of Edinburgh)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    This paper presents Zidian, a middleware for key-value (KV) stores to speed up SQL query evaluation over NoSQL. As opposed to common practice that takes a tuple id or primary key as key and the entire tuple as value, Zidian proposes a block-as-a-value model BaaV. BaaV represents a relation as keyed blocks (k, B), where k is a key of a block (a set) B of partial tuples. We extend relational algebra to BaaV. We show that under BaaV, Zidian substantially reduces data access and communication cost. We provide characterizations (sufficient and necessary conditions) for (a) result-preserving queries, i.e., queries covered by available BaaV stores, (b) scan-free queries, i.e., queries that can be evaluated without scanning any table, and (c) bounded queries, i.e., queries that can be answered by accessing a bounded amount of data. We show that in parallel processing, Zidian guarantees (a) no scans for scan-free queries, (b) bounded communication cost for bounded queries; and (c) parallel scalability, i.e., speed up when adding processors. Moreover, Zidian can be plugged into existing SQL-over-NoSQL systems and retains horizontal scalability. Using benchmark and real-life data, we empirically verify that Zidian improves existing SQL-over-NoSQL systems by 2 orders of magnitude on average.
                </span>

            </p>

            <p class="schedule-item" data-id="506">
                <strong class="schedule-item-title" data-num="15.4">Cache-aware load balancing of data center applications</strong>
                <span class="schedule-item-people">
                    <span class="author">Aaron&nbsp;Archer</span>&nbsp;(Google),
                    <span class="author">Kevin&nbsp;Aydin</span>&nbsp;(Google),
                    <span class="author">MohammadHossein&nbsp;Bateni</span>&nbsp;(Google),
                    <span class="author">Vahab&nbsp;Mirrokni</span>&nbsp;(Google),
                    <span class="author">Aaron&nbsp;Schild</span>&nbsp;(UC Berkeley),
                    <span class="author">Ray&nbsp;Yang</span>&nbsp;(Google), and
                    <span class="author">Richard&nbsp;Zhuang</span>&nbsp;(Google)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Our deployment of cache-aware load balancing in the Google web search backend reduced cache misses by ~0.5x, contributing to a double-digit percentage increase in the throughput of our serving clusters by relieving a bottleneck. This innovation has benefited all production workloads since 2015, serving billions of queries daily. A load balancer forwards each query to one of several identical serving replicas. The replica pulls each term's postings list into RAM from flash, either locally or over the network. Flash bandwidth is a critical bottleneck, motivating an application-directed RAM cache on each replica. Sending the same term reliably to the same replica would increase the chance it hits cache, and avoid polluting the other replicas' caches. However, most queries contain multiple terms and we have to send the whole query to one replica, so it is not possible to achieve a perfect partitioning of terms to replicas. We solve this via a voting scheme, whereby the load balancer conducts a weighted vote by the terms in each query, and sends the query to the winning replica. We develop a multi-stage scalable algorithm to learn these weights. We first construct a large-scale term-query graph from logs and apply a distributed balanced graph partitioning algorithm to cluster each term to a preferred replica. This yields a good but simplistic initial voting table, which we then iteratively refine via cache simulation to capture feedback effects.
                </span>

            </p>

            <p class="schedule-item" data-id="494">
                <strong class="schedule-item-title" data-num="15.5">Design, Implementation, and Evaluation of Write-Back Policy with Cache Augmented Data Stores</strong>
                <span class="schedule-item-people">
                    <span class="author">Shahram&nbsp;Ghandeharizadeh</span>&nbsp;(University of Southern California) and
                    <span class="author">Hieu&nbsp;T&nbsp;Nguyen</span>&nbsp;(University of Southern California)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The Cache Augmented Data Store (CADS) architecture extends a persistent data store with an in-memory cache manager. It is widely deployed to support read-intensive workloads. However, its write-around and write-through policies prevent the caching tier from absorbing write load. This means the data store layer must scale to process writes even when the extra capacity is not needed for read load. We address this limitation by devising a write-back technique to enable the caching layer to process both reads and writes. This technique preserves ACID transactions. We present a client side implementation of write-back and evaluate it using the YCSB, BG, and TPC-C benchmarks. In addition, we compare our write-back with (a) write-back policy of a data store such as MongoDB and (b) write-back policy of a host-side cache such as Flashcache.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_16">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 16: Data Exploration</strong>
                <span class="schedule-chair">Chaired by <em>Fabio Porto</em> (LNCC, USA) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="227">
                <strong class="schedule-item-title" data-num="16.1">Optimization for Active Learning-based Interactive Database Exploration</strong>
                <span class="schedule-item-people">
                    <span class="author">Enhui&nbsp;Huang</span>&nbsp;(Ecole Polytechnique),
                    <span class="author">Liping&nbsp;Peng</span>&nbsp;(University of Massachusetts Amherst),
                    <span class="author">Luciano&nbsp;Di&nbsp;Palma</span>&nbsp;(Ecole Polytechnique),
                    <span class="author">Ahmed&nbsp;Abdelkafi</span>&nbsp;(Ecole Polytechnique),
                    <span class="author">Anna&nbsp;Liu</span>&nbsp;(University of Massachusetts Amherst), and
                    <span class="author">Yanlei&nbsp;Diao</span>&nbsp;(Ecole Polytechnique and University of Massachusetts Amherst)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    There is an increasing gap between fast growth of data and limited human ability to comprehend data. Consequently, there has been a growing demand of data management tools that can bridge this gap and help the user retrieve high-value content from data more effectively. In this work, we aim to build interactive data exploration as a new database service, using an approach called "explore-by-example". In particular, we cast the explore-by-example problem in a principled "active learning" framework, and bring the properties of important classes of database queries to bear on the design of new algorithms and optimizations for active learning-based database exploration. These new techniques allow the database system to overcome a fundamental limitation of traditional active learning, i.e., the slow convergence problem. Evaluation results using real-world datasets and user interest patterns show that our new system significantly outperforms state-of-the-art active learning techniques and data exploration systems in accuracy while achieving desired effciency for interactive performance.
                </span>

            </p>

            <p class="schedule-item" data-id="388">
                <strong class="schedule-item-title" data-num="16.2">DIFF: A Relational Interface for Large-Scale Data Explanation</strong>
                <span class="schedule-item-people">
                    <span class="author">Firas&nbsp;Abuzaid</span>&nbsp;(Stanford University),
                    <span class="author">Peter&nbsp;Kraft</span>&nbsp;(Stanford University),
                    <span class="author">Sahaana&nbsp;Suri</span>&nbsp;(Stanford University),
                    <span class="author">Edward&nbsp;Gan</span>&nbsp;(Stanford University),
                    <span class="author">Eric&nbsp;Xu</span>&nbsp;(Stanford University),
                    <span class="author">Atul&nbsp;Shenoy</span>&nbsp;(Microsoft),
                    <span class="author">Asvin&nbsp;Ananthanarayan</span>&nbsp;(Microsoft),
                    <span class="author">John&nbsp;Sheu</span>&nbsp;(Microsoft),
                    <span class="author">Erik&nbsp;Meijer</span>&nbsp;(Facebook),
                    <span class="author">Xi&nbsp;Wu</span>&nbsp;(Google),
                    <span class="author">Jeff&nbsp;Naughton</span>&nbsp;(Google),
                    <span class="author">Peter&nbsp;D&nbsp;Bailis</span>&nbsp;(Stanford University), and
                    <span class="author">Matei&nbsp;Zaharia</span>&nbsp;(Stanford University and Databricks)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A range of explanation engines assist data analysts by performing feature selection over increasingly high-volume and high-dimensional data, grouping and highlighting commonalities among data points. While useful in diverse tasks such as user behavior analytics, operational event processing, and root cause analysis, today's explanation engines are designed as standalone data processing tools that do not interoperate with traditional, SQL-based analytics workflows; this limits the applicability and extensibility of these engines. In response, we propose the DIFF operator, a relational aggregation operator that unifies the core functionality of these engines with declarative relational query processing. We implement both single-node and distributed versions of the DIFF operator in MB SQL, an extension of MacroBase, and demonstrate how DIFF can provide the same semantics as existing explanation engines while capturing a broad set of production use cases in industry, including at Microsoft and Facebook. Additionally, we illustrate how this declarative approach to data explanation enables new logical and physical query optimizations. We evaluate these optimizations on several real-world production applications, and find that DIFF in MB SQL can outperform state-of-the-art engines by up to an order of magnitude.
                </span>

            </p>

            <p class="schedule-item" data-id="572">
                <strong class="schedule-item-title" data-num="16.3">Explain3D: Explaining Disagreements in Disjoint Datasets</strong>
                <span class="schedule-item-people">
                    <span class="author">Xiaolan&nbsp;Wang</span>&nbsp;(University of Massachusetts Amherst) and
                    <span class="author">Alexandra&nbsp;Meliou</span>&nbsp;(University of Massachusetts Amherst)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data plays an important role in applications, analytic processes, and many aspects of human activity. As data grows in size and complexity, we are met with an imperative need for tools that promote understanding and explanations over data-related operations. Data management research on explanations has focused on the assumption that data resides in a single dataset, under one common schema. But the reality of today's data is that it is frequently unintegrated, coming from different sources with different schemas. When different datasets provide different answers to semantically similar questions, understanding the reasons for the discrepancies is challenging and cannot be handled by the existing single-dataset solutions. In this paper, we propose Explain3D, a framework for explaining the Disagreements across Disjoint Datasets (3D). Explain3D focuses on identifying the reasons for the differences in the results of two semantically similar queries operating on two datasets with potentially different schemas. Our framework leverages the queries to perform a semantic mapping across the relevant parts of their provenance; discrepancies in this mapping point to causes of the queries' differences. Exploiting the queries gives Explain3D an edge over traditional schema matching and record linkage techniques, which are query-agnostic. Our work makes the following contributions: (1) We formalize the problem of deriving optimal explanations for the differences of the results of semantically similar queries over disjoint datasets. Our optimization problem considers two types of explanations, provenance-based and value-based, defined over an evidence mapping, which makes our solution interpretable. (2) We design a 3-stage framework for solving the optimal explanation problem. (3) We develop a smart-partitioning optimizer that improves the efficiency of the framework by orders of magnitude. (4) We experiment with real-world and synthetic data to demonstrate that Explain3D can derive precise explanations efficiently, and is superior to alternative methods based on integration techniques and single-dataset explanation frameworks.
                </span>

            </p>

            <p class="schedule-item" data-id="251">
                <strong class="schedule-item-title" data-num="16.4">Exploring Change - A New Dimension of Data Analytics</strong>
                <span class="schedule-item-people">
                    <span class="author">Tobias&nbsp;Bleifuß</span>&nbsp;(Hasso Plattner Institute),
                    <span class="author">Leon&nbsp;Bornemann</span>&nbsp;(Hasso Plattner Institute),
                    <span class="author">Theodore&nbsp;Johnson</span>&nbsp;(AT&T Labs - Research),
                    <span class="author">Dmitri&nbsp;V.&nbsp;Kalashnikov</span>&nbsp;(AT&T Labs Research),
                    <span class="author">Felix&nbsp;Naumann</span>&nbsp;(Hasso Plattner Institute), and
                    <span class="author">Divesh&nbsp;Srivastava</span>&nbsp;(AT&T Labs Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data and metadata in datasets experience many different kinds of change. Values are inserted, deleted or updated; rows appear and disappear; columns are added or repurposed, etc. In such a dynamic situation, users might have many questions related to changes in the dataset, for instance which parts of the data are trustworthy and which are not? Users will wonder: How many changes have there been in the recent minutes, days or years? What kind of changes were made at which points of time? How dirty is the data? Is data cleansing required? The fact that data changed can hint at different hidden processes or agendas: a frequently crowd-updated city name may be controversial; a person whose name has been recently changed may be the target of vandalism; and so on. We show various use cases that benefit from recognizing and exploring such change. We envision a system and methods to interactively explore such change, addressing the variability dimension of big data challenges. To this end, we propose a model to capture change and the process of exploring dynamic data to identify salient changes. We provide exploration primitives along with motivational examples and measures for the volatility of data. We identify technical challenges that need to be addressed to make our vision a reality, and propose directions of future work for the data management community.
                </span>

            </p>

            <p class="schedule-item" data-id="567">
                <strong class="schedule-item-title" data-num="16.5">ProvCite: Provenance-based Data Citation</strong>
                <span class="schedule-item-people">
                    <span class="author">Yinjun&nbsp;Wu</span>&nbsp;(University of Pennsylvania),
                    <span class="author">Abdussalam&nbsp;Alawini</span>&nbsp;(University of Illinois at Urbana-Champaign),
                    <span class="author">Daniel&nbsp;Deutch</span>&nbsp;(Tel Aviv University),
                    <span class="author">Tova&nbsp;Milo</span>&nbsp;(Tel Aviv University), and
                    <span class="author">Susan&nbsp;Davidson</span>&nbsp;(University of Pennsylvania)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    As research products expand to include structured datasets,the challenge arises of how to automatically generate citations to the results of arbitrary queries against such datasets. Previous work explored this problem in the context of conjunctive queries and views using a Rewriting-Based Model (RBM). However, an increasing number of scientific queries are aggregate, e.g. statistical summaries of the underlying data, for which the RBM cannot be easily extended. In this paper, we show how a Provenance-Based Model (PBM) can be leveraged to 1) generate citations to conjunctive as well as aggregate queries and views; 2) associate citations with individual result tuples to enable arbitrary subsets of the result set to be cited (fine-grained citations); and 3) be optimized to return citations in acceptable time. Our implementation of PBM in ProvCite shows that it not only handles a larger class of queries and views than RBM, but can outperform it when restricted to conjunctive views in some cases.
                </span>

            </p>


        </div>

        <div>
            <div data-day="4">
                <abbr long="Thursday" short="Thr"></abbr>
                <p><strong>29</strong><em>Aug</em></p>
            </div>
        </div>

        <div>
            <div class="schedule-head" id="Research_Session_17">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 17: Distributed Systems II</strong>
                <span class="schedule-chair">Chaired by <em>Philippe Bonnet</em> (IT University Copenhagen, Denmark) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1028">
                <strong class="schedule-item-title" data-num="17.1">Megaphone: Latency-conscious state migration for distributed streaming dataflows</strong>
                <span class="schedule-item-people">
                    <span class="author">Moritz&nbsp;Hoffmann</span>&nbsp;(ETH Zurich),
                    <span class="author">Andrea&nbsp;Lattuada</span>&nbsp;(ETH Zurich),
                    <span class="author">Frank&nbsp;McSherry</span>&nbsp;(ETH Zurich),
                    <span class="author">Vasiliki&nbsp;Kalavri</span>&nbsp;(ETH Zurich),
                    <span class="author">John&nbsp;Liagouris</span>&nbsp;(ETH Zurich), and
                    <span class="author">Timothy&nbsp;Roscoe</span>&nbsp;(ETH Zurich)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We design and implement Megaphone, a data migration mechanism for stateful distributed dataflow engines with latency objectives. When compared to existing migration mechanisms, Megaphone has the following differentiating characteristics: (i) migrations can be subdivided to a configurable granularity to avoid latency spikes, and (ii) migrations can be prepared ahead of time to avoid runtime coordination. Megaphone is implemented as a library on an unmodified timely dataflow implementation, and provides an operator interface compatible with its existing APIs. We evaluate Megaphone on established benchmarks with varying amounts of state and observe that compared to naive approaches Megaphone reduces service latencies during reconfiguration by orders of magnitude without significantly increasing steady-state overhead.
                </span>

            </p>

            <p class="schedule-item" data-id="426">
                <strong class="schedule-item-title" data-num="17.2">Minimizing Cost by Reducing Scaling Operations in Distributed Stream Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Michael&nbsp;Borkowski</span>&nbsp;(TU Wien),
                    <span class="author">Christoph&nbsp;Hochreiner</span>&nbsp;(TU Wien), and
                    <span class="author">Stefan&nbsp;Schulte</span>&nbsp;(TU Wien)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Elastic distributed stream processing systems are able to dynamically adapt to changes in the workload. Often, these systems react to the rate of incoming data, or to the level of resource utilization, by scaling up or down. The goal is to optimize the system's resource usage, thereby reducing its operational cost. However, such scaling operations consume resources on their own, introducing a certain overhead of resource usage, and therefore cost, for every scaling operation. In addition, migrations caused by scaling operations inevitably lead to brief processing gaps. Therefore, an excessive number of scaling operations should be avoided. We approach this problem by preventing unnecessary scaling operations and over-compensating reactions to short-term changes in the workload. This allows to maintain elasticity, while also minimizing the incurred overhead cost of scaling operations. To achieve this, we use advanced filtering techniques from the field of signal processing to pre-process raw system measurements, thus mitigating superfluous scaling operations. We perform a real-world testbed evaluation verifying the effects, and provide a break-even cost analysis to show the economic feasibility of our approach.
                </span>

            </p>

            <p class="schedule-item" data-id="424">
                <strong class="schedule-item-title" data-num="17.3">Performance-Optimal Filtering: Bloom Overtakes Cuckoo at High Throughput</strong>
                <span class="schedule-item-people">
                    <span class="author">Harald&nbsp;Lang</span>&nbsp;(TU Munich),
                    <span class="author">Thomas&nbsp;Neumann</span>&nbsp;(TU Munich),
                    <span class="author">Alfons&nbsp;Kemper</span>&nbsp;(TU Munich), and
                    <span class="author">Peter&nbsp;Boncz</span>&nbsp;(CWI)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We define the concept of performance-optimal filtering to indicate the Bloom or Cuckoo filter configuration that best accelerates a particular task. While the space-precision trade-off of these filters has been well studied, we show how to pick a filter that maximizes the performance for a given workload. This choice might be "suboptimal" relative to traditional space-precision metrics, but it will lead to better performance in practice. In this paper, we focus on high-throughput filter use cases, aimed at avoiding CPU work, e.g., a cache miss, a network message, or a local disk I/O - events that can happen at rates of millions to hundreds per second. Besides the false-positive rate and memory footprint of the filter, performance optimality has to take into account the absolute cost of the filter lookup as well as the saved work per lookup that filtering avoids; while the actual rate of negative lookups in the workload determines whether using a filter improves overall performance at all. In the course of the paper, we introduce new filter variants, namely the register-blocked and cache-sectorized Bloom filters. We present new implementation techniques and perform an extensive evaluation on modern hardware platforms, including the wide-SIMD Skylake-X and Knights Landing. This experimentation shows that in high-throughput situations, the lower lookup cost of blocked Bloom filters allows them to overtake Cuckoo filters.
                </span>

            </p>

            <p class="schedule-item" data-id="505">
                <strong class="schedule-item-title" data-num="17.4">Scaling-Up In-Memory Datalog Processing: Observations and Techniques</strong>
                <span class="schedule-item-people">
                    <span class="author">Zhiwei&nbsp;Fan</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">Jianqiao&nbsp;Zhu</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">Zuyu&nbsp;Zhang</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">Aws&nbsp;Albarghouthi</span>&nbsp;(University of Wisconsin-Madison),
                    <span class="author">Paraschos&nbsp;Koutris</span>&nbsp;(University of Wisconsin-Madison), and
                    <span class="author">Jignesh&nbsp;Patel</span>&nbsp;(University of Wisconsin-Madison)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Recursive query processing has experienced a recent resurgence, as a result of its use in many modern application domains, including data integration, graph analytics, security, program analysis, networking and decision making. Due to the large volumes of data being processed, several research efforts across multiple communities have explored how to scale up recursive queries, typically expressed in Datalog. Our experience with these tools indicate that their performance does not translate across domains—e.g., a tool designed for large-scale graph analytics does not exhibit the same performance on program-analysis tasks, and vice versa. Starting from the above observation, we make the following two contributions. First, we perform a detailed experimental evaluation comparing a number of state-of-the-art Datalog systems on a wide spectrum of graph analytics and program-analysis tasks, and summarize the pros and cons of existing techniques. Second, we design and implement our own general-purpose Datalog engine, called RecStep, on top of a parallel single-node relational system. We outline the techniques we applied on RecStep, as well as the contribution of each technique to the overall performance. Using RecStep as a baseline, we demonstrate that it generally outperforms state-of-the-art parallel Datalog engines on complex and large-scale Datalog evaluation, by a 4-6X margin. An additional insight from our work is that it is possible to build a high-performance Datalog system on top of a relational engine, an idea that has been dismissed in past work.
                </span>

            </p>

            <p class="schedule-item" data-id="1071">
                <strong class="schedule-item-title" data-num="17.5">Selectivity Estimation for Range Predicates using Lightweight Models</strong>
                <span class="schedule-item-people">
                    <span class="author">Anshuman&nbsp;Dutt</span>&nbsp;(Microsoft Research),
                    <span class="author">Chi&nbsp;Wang</span>&nbsp;(Microsoft Research),
                    <span class="author">Azade&nbsp;Nazi</span>&nbsp;(Google AI),
                    <span class="author">Srikanth&nbsp;Kandula</span>&nbsp;(Microsoft Research),
                    <span class="author">Vivek&nbsp;Narasayya</span>&nbsp;(Microsoft Research), and
                    <span class="author">Surajit&nbsp;Chaudhuri</span>&nbsp;(Microsoft Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Query optimizers depend on selectivity estimates of query predicates to produce a good execution plan. When a query contains multiple predicates, today's optimizers use a variety of assumptions, such as independence between predicates, to estimate selectivity. While such techniques have the benefit of fast estimation and small memory footprint, they often incur large selectivity estimation errors. In this work, we reconsider selectivity estimation as a regression problem. We explore application of neural networks and tree-based ensembles to the important problem of selectivity estimation of multi-dimensional range predicates. While their straightforward application does not outperform even simple baselines, we propose two simple yet effective design choices, i.e., regression label transformation and feature engineering, motivated by the selectivity estimation context. Through extensive empirical evaluation across a variety of datasets, we show that the proposed models deliver both highly accurate estimates as well as fast estimation.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_19">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 19: Indexing and Search</strong>
                <span class="schedule-chair">Chaired by <em>Bolin Ding</em> (Alibaba Group, China) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="303">
                <strong class="schedule-item-title" data-num="19.1">Automatic Index Selection for Large-Scale Datalog Computation</strong>
                <span class="schedule-item-people">
                    <span class="author">Pavle&nbsp;Subotic</span>&nbsp;(UCL),
                    <span class="author">Herbert&nbsp;Jordan</span>&nbsp;(University of Innsbruck),
                    <span class="author">Lijun&nbsp;Chang</span>&nbsp;(The University of Sydney),
                    <span class="author">Alan&nbsp;Fekete</span>&nbsp;(University of Sydney), and
                    <span class="author">Bernhard&nbsp;Scholz</span>&nbsp;(University of Sydney)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Datalog has been applied to several use cases that require very high performance on large rulesets and factsets. It is common to create indexes for relations to improve search performance. However, the existing indexing schemes either require manual index selection or result in insufficient performance on very large tasks. In this paper, we propose an automatic scheme to select indexes. We automatically create the minimum number of indexes to speed up all the searches in a given Datalog program. We have integrated our indexing scheme into an open-source Datalog engine SOUFFLÉ. We obtain performance on a par with what users have accepted from hand-optimized Datalog programs running on state-of-the-art Datalog engines, while we do not require the effort of manual index selection. Extensive experiments on large real Datalog programs demonstrate that our indexing scheme results in considerable speedups (up to 2x) and significantly less memory usage (up to 6x) compared with other automated index selections.
                </span>

            </p>

            <p class="schedule-item" data-id="38">
                <strong class="schedule-item-title" data-num="19.2">List Intersection for Web Search: Algorithms, Cost Models, and Optimizations</strong>
                <span class="schedule-item-people">
                    <span class="author">Sunghwan&nbsp;Kim</span>&nbsp;(POSTECH),
                    <span class="author">Taesung&nbsp;Lee</span>&nbsp;(IBM Research AI),
                    <span class="author">Seungwon&nbsp;Hwang</span>&nbsp;(Yonsei University), and
                    <span class="author">Sameh&nbsp;Elnikety</span>&nbsp;(Microsoft Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    This paper studies the optimization of list intersection, especially in the context of the matching phase of search engines. Given a user query, we intersect the postings lists corresponding to the query keywords to generate the list of documents matching all keywords. Since the speed of list intersection depends the algorithm, hardware, and list lengths and their correlations, none the existing intersection algorithms outperforms the others in every scenario. Therefore, we develop a cost-based approach in which we identify a search space, spanning existing algorithms and their combinations. We propose a cost model to estimate the cost of the algorithms with their combinations, and use the cost model to search for the lowest-cost algorithm. The resulting plan is usually a combination of 2-way algorithms, outperforming conventional 2-way and k-way algorithms. The proposed approach is more general than designing a specific algorithm, as the cost models can be adapted to different hardware. We validate the cost model experimentally on two different CPUs, and show that the cost model closely estimates the actual cost. Using both real and synthetic datasets, we show that the proposed cost-based optimizer outperforms the state-of-the-art alternatives.
                </span>

            </p>

            <p class="schedule-item" data-id="418">
                <strong class="schedule-item-title" data-num="19.3">Document Reordering for Faster Intersection</strong>
                <span class="schedule-item-people">
                    <span class="author">Qi&nbsp;Wang</span>&nbsp;(New York University) and
                    <span class="author">Torsten&nbsp;Suel</span>&nbsp;(New York University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A lot of research has studied how to optimize inverted index structures in search engines through suitable reassignment of document identifiers. This approach was originally proposed to allow for better compression of the index, but subsequent work showed that it can also result in significant speed-ups for conjunctive queries and even certain types of disjunctive top-k algorithms. However, we do not have a good understanding of why this happens, and how we could directly optimize an index for query processing speed. As a result, existing techniques attempt to optimize for size, and treat speed increases as a welcome side-effect. In this paper, we take an initial but important step towards understanding and modeling speed increases due to document reordering. We define the problem of minimizing the cost of queries given an inverted index and a query distribution, relate it to work on adaptive set intersection, and show that it is fundamentally different from that of minimizing compressed index size. We then propose a heuristic algorithm for finding a document reordering that minimizes query processing costs under suitable cost models. Our experiments show significant increases in the speed of intersections over state-of-the-art reordering techniques.
                </span>

            </p>

            <p class="schedule-item" data-id="364">
                <strong class="schedule-item-title" data-num="19.4">Fast Approximate Nearest Neighbor Search With The Navigating Spreading-out Graph</strong>
                <span class="schedule-item-people">
                    <span class="author">Cong&nbsp;Fu</span>&nbsp;(Zhejiang University),
                    <span class="author">Chao&nbsp;Xiang</span>&nbsp;(Zhejiang University),
                    <span class="author">Changxu&nbsp;Wang</span>&nbsp;(Zhejiang University), and
                    <span class="author">Deng&nbsp;Cai</span>&nbsp;(Zhejiang University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Approximate nearest neighbor search (ANNS) is a fundamental problem in databases and data mining. A scalable ANNS algorithm should be both memory-efficient and fast. Some early graph-based approaches have shown attractive theoretical guarantees on search time complexity, but they all suffer from the problem of high indexing time complexity. Recently, some graph-based methods have been proposed to reduce indexing complexity by approximating the traditional graphs; these methods have achieved revolutionary performance on million-scale datasets. Yet, they still can not scale to billion-node databases. In this paper, to further improve the search-efficiency and scalability of graph-based methods, we start by introducing four aspects: (1) ensuring the connectivity of the graph; (2) lowering the average out-degree of the graph for fast traversal; (3) shortening the search path; and (4) reducing the index size. Then, we propose a novel graph structure called Monotonic Relative Neighborhood Graph (MRNG) which guarantees very low search complexity (close to logarithmic time). To further lower the indexing complexity and make it practical for billion-node ANNS problems, we propose a novel graph structure named Navigating Spreading-out Graph (NSG) by approximating the MRNG. The NSG takes the four aspects into account simultaneously. Extensive experiments show that NSG outperforms all the existing algorithms significantly. In addition, NSG shows superior performance in the E-commercial scenario of Taobao (Alibaba Group) and has been integrated into their billion-scale search engine.
                </span>

            </p>

            <p class="schedule-item" data-id="352">
                <strong class="schedule-item-title" data-num="19.5">PS-Tree-Based Efficient Boolean Expression Matching for High-Dimensional and Dense Workloads</strong>
                <span class="schedule-item-people">
                    <span class="author">Shuping&nbsp;Ji</span>&nbsp;(Technical University of Munich) and
                    <span class="author">Hans-Arno&nbsp;Jacobsen</span>&nbsp;(University of Toronto)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Boolean expression matching is an important function for many applications. However, existing solutions still suffer from limitations when applied to high-dimensional and dense workloads. To overcome these limitations, in this paper, we design a data structure called PS-Tree, that can efficiently index subscriptions in one dimension. By dividing predicates into disjoint predicate spaces, PS-Tree achieves high matching performance and good expressiveness. Based on PS-Tree, we first propose a Boolean expression matching algorithm PSTBloom. By efficiently filtering out a large proportion of unmatching subscriptions, PSTBloom achieves high matching performance, especially for high-dimensional workloads. PSTBloom also achieves fast index construction and a small memory footprint. Compared with state-of-the-art methods, comprehensive experiments show that PSTBloom reduces matching time, index construction time and memory usage by up to 84%, 78% and 94%, respectively. Although PSTBloom is effective for many workload distributions, dense workloads represent new challenges to PSTBloom and other algorithms. To effectively handle dense workloads, we further propose the PSTHash algorithm, which divides subscriptions into disjoint multidimensional predicate spaces. This organization prunes partially matching subscriptions efficiently. Comprehensive experiments on both synthetic and real-world datasets show that PSTHash improves the matching performance by up to 92% for dense workloads.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_20">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 20: Usability and data mining</strong>
                <span class="schedule-chair">Chaired by <em>Jun Yang</em> (Duke University, USA) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="502">
                <strong class="schedule-item-title" data-num="20.1">User Guidance for Efficient Fact Checking</strong>
                <span class="schedule-item-people">
                    <span class="author">Thanh&nbsp;Tam&nbsp;Nguyen</span>&nbsp;(EPFL),
                    <span class="author">Matthias&nbsp;Weidlich</span>&nbsp;(Humboldt-Universität zu Berlin),
                    <span class="author">Hongzhi&nbsp;Yin</span>&nbsp;(The University of Queensland),
                    <span class="author">Bolong&nbsp;Zheng</span>&nbsp;(Huazhong University of Science and Technology),
                    <span class="author">Quoc&nbsp;Viet&nbsp;Hung&nbsp;Nguyen</span>&nbsp;(Griffith University), and
                    <span class="author">Bela&nbsp;Stantic</span>&nbsp;(Griffith University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The Web constitutes a valuable source of information. In recent years, it fostered the construction of large-scale knowledge bases, such as Freebase, YAGO, and DBpedia. The open nature of the Web, with content potentially being generated by everyone, however, leads to inaccuracies and misinformation. Construction and maintenance of a knowledge base thus has to rely on fact checking, an assessment of the credibility of facts. Due to an inherent lack of ground truth information, such fact checking cannot be done in a purely automated manner, but requires human involvement. In this paper, we propose a comprehensive framework to guide users in the validation of facts, striving for a minimisation of the invested effort. Our framework is grounded in a novel probabilistic model that combines user input with automated credibility inference. Based thereon, we show how to guide users in fact checking by identifying the facts for which validation is most beneficial. Moreover, our framework includes techniques to reduce the manual effort invested in fact checking by determining when to stop the validation and by supporting efficient batching strategies. We further show how to handle fact checking in a streaming setting. Our experiments with three real-world datasets demonstrate the efficiency and effectiveness of our framework: A knowledge base of high quality, with a precision of above 90%, is constructed with only a half of the validation effort required by baseline techniques.
                </span>

            </p>

            <p class="schedule-item" data-id="344">
                <strong class="schedule-item-title" data-num="20.2">Query Log Compression for Workload Analytics</strong>
                <span class="schedule-item-people">
                    <span class="author">Ting&nbsp;Xie</span>&nbsp;(University at Buffalo, SUNY),
                    <span class="author">Varun&nbsp;Chandola</span>&nbsp;(University at Buffalo, SUNY), and
                    <span class="author">Oliver&nbsp;A&nbsp;Kennedy</span>&nbsp;(University at Buffalo, SUNY)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Analyzing database access logs is a key part of performance tuning, intrusion detection, benchmark development, and many other database administration tasks. Unfortunately, it is common for production databases to deal with millions or more queries each day, so these logs must be summarized before they can be used. Designing an appropriate summary encoding requires trading off between conciseness and information content. For example: simple workload sampling may miss rare, but high impact queries. In this paper, we present LogR, a lossy log compression scheme suitable for use in many automated log analytics tools, as well as for human inspection. We formalize and analyze the space/fidelity trade-off in the context of a broader family of "pattern" and "pattern mixture" log encodings to which LogR belongs. We show through a series of experiments that LogR compressed encodings can be created efficiently, come with provable information-theoretic bounds on their accuracy, and outperform state-of-art log summarization strategies.
                </span>

            </p>

            <p class="schedule-item" data-id="1134">
                <strong class="schedule-item-title" data-num="20.3">Subjective Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Yuliang&nbsp;Li</span>&nbsp;(Megagon Labs),
                    <span class="author">Aaron&nbsp;Feng</span>&nbsp;(Megagon Labs),
                    <span class="author">Jinfeng&nbsp;Li</span>&nbsp;(Megagon Labs),
                    <span class="author">Saran&nbsp;Mumick</span>&nbsp;(Megagon Labs),
                    <span class="author">Alon&nbsp;Halevy</span>&nbsp;(Megagon Labs),
                    <span class="author">Vivian&nbsp;Li</span>&nbsp;(Megagon Labs), and
                    <span class="author">Wang-Chiew&nbsp;Tan</span>&nbsp;(Megagon Labs)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Online users are constantly seeking experiences, such as a hotel with clean rooms and a lively bar, or a restaurant for a romantic rendezvous. However, e-commerce search engines only support queries involving objective attributes such as location, price, and cuisine, and any experiential data is relegated to text reviews. In order to support experiential queries, a database system needs to model subjective data. Users should be able to pose queries that specify subjective experiences using their own words, in addition to conditions on the usual objective attributes. This paper introduces OpineDB, a subjective database system that addresses these challenges. We introduce a data model for subjective databases. We describe how OpineDB translates subjective queries against the subjective database schema, which is done by matching the user query phrases to the underlying schema. We also show how the experiential conditions specified by the user can be combined and the results aggregated and ranked. We demonstrate that subjective databases satisfy user needs more effectively and accurately than alternative techniques through experiments with real data of hotel and restaurant reviews.
                </span>

            </p>

            <p class="schedule-item" data-id="1129">
                <strong class="schedule-item-title" data-num="20.4">Example-Driven Query Intent Discovery: Abductive Reasoning using Semantic Similarity</strong>
                <span class="schedule-item-people">
                    <span class="author">Anna&nbsp;Fariha</span>&nbsp;(University of Massachusetts Amherst) and
                    <span class="author">Alexandra&nbsp;Meliou</span>&nbsp;(University of Massachusetts Amherst)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Traditional relational data interfaces require precise structured queries over potentially complex schemas. These rigid data retrieval mechanisms pose hurdles for non-expert users, who typically lack language expertise and are unfamiliar with the details of the schema. Query by Example (QBE) methods offer an alternative mechanism: users provide examples of their intended query output and the QBE system needs to infer the intended query. However, these approaches focus on the structural similarity of the examples and ignore the richer context present in the data. As a result, they typically produce queries that are too general, and fail to capture the user's intent effectively. In this paper, we present SQuID, a system that performs semantic similarity-aware query intent discovery. Our work makes the following contributions: (1) We design an end-to-end system that automatically formulates select-project-join queries in an open-world setting, with optional group-by aggregation and intersection operators; a much larger class than prior QBE techniques. (2) We express the problem of query intent discovery using a probabilistic abduction model, that infers a query as the most likely explanation of the provided examples. (3) We introduce the notion of an abduction-ready database, which precomputes semantic properties and related statistics, allowing SQuID to achieve real-time performance. (4) We present an extensive empirical evaluation on three real-world datasets, including user-intent case studies, demonstrating that SQuID is efficient and effective, and outperforms machine learning methods, as well as the state-of-the-art in the related query reverse engineering problem.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_18">
                <span class="schedule-time">11:00 &ndash; 12:30</span><strong class="main-title">Research Session 18: Graph Analytics II</strong>
                <span class="schedule-chair">Chaired by <em>Xiangmin Zhou</em> (RMIT University, Australia) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1092">
                <strong class="schedule-item-title" data-num="18.1">Constrained Shortest Path Query in a Large Time-Dependent Graph</strong>
                <span class="schedule-item-people">
                    <span class="author">Ye&nbsp;Yuan</span>&nbsp;(Beijing Institute of Technology),
                    <span class="author">Xiang&nbsp;Lian</span>&nbsp;(Kent State University),
                    <span class="author">Guoren&nbsp;Wang</span>&nbsp;(Beijing Institute of Technology),
                    <span class="author">Yuliang&nbsp;Ma</span>&nbsp;(Northeastern University), and
                    <span class="author">Yishu&nbsp;Wang</span>&nbsp;(Northeastern University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The constrained shortest path (CSP) query over static graphs has been extensively studied, since it has wide applications in transportation networks, telecommunication networks and etc. Such networks are dynamic and evolve over time, being modeled as time-dependent graphs. Therefore, in this paper, we study the CSP query over a large time-dependent graph. Specifically, we study the point CSP (PCSP) query and interval CSP (ICSP) query. We formally prove that it is NP-complete to process a PCSP query and at least EXPSPACE to answer an ICSP query. We propose approximate sequential algorithms to answer the PCSP and ICSP queries efficiently. We also develop parallel algorithms for the queries that guarantee to scale with big time-dependent graphs. Using real-life graphs, we experimentally verify the efficiency and scalability of our algorithms.
                </span>

            </p>

            <p class="schedule-item" data-id="423">
                <strong class="schedule-item-title" data-num="18.2">Correlation Constraint Shortest Path over Large Multi-Relation Graphs</strong>
                <span class="schedule-item-people">
                    <span class="author">Xiaofei&nbsp;Zhang</span>&nbsp;(University of Memphis) and
                    <span class="author">Tamer&nbsp;Özsu</span>&nbsp;(University of Waterloo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Multi-relation graphs intuitively capture the heterogeneous correlations among real-world entities by allowing multiple types of relationships to be represented as entity-connecting edges, i.e., two entities could be correlated with more than one type of relationship. This is important in various applications such as social network analysis, ecology, and bio-informatics. Existing studies on these graphs usually consider an edge label constraint perspective, where each edge contains only one label and each edge is considered independently. For example, there are lines of research focusing on reachability between two vertices under a set of edge label constraints, or finding paths whose consecutive edge labels satisfy a user-specified logical expression. This is too restricted in real graphs, and in this work, we define a generic correlation constraint on multi-relation graphs from the perspective of vertex correlations, where a correlation can be defined recursively. Specifically, we formalize and investigate the shortest path problem over large multi-relation graphs in the presence of both necessity and denial constraints, which have various real applications. We show that it is nontrivial to apply conventional graph traversal algorithms (e.g., BFS or DFS) to address the challenge. To effectively reduce the search space, we propose a Hybrid Relation Encoding method, a.k.a. HyRE, to encode both topological and relation information in a compact way. We conduct extensive experiments over large real-world graphs to validate the effectiveness and efficiency of the proposed solution.
                </span>

            </p>

            <p class="schedule-item" data-id="666">
                <strong class="schedule-item-title" data-num="18.3">An In-Depth Comparison of s-t Reliability Algorithms over Uncertain Graphs</strong>
                <span class="schedule-item-people">
                    <span class="author">Xiangyu&nbsp;Ke</span>&nbsp;(Nanyang Technological University),
                    <span class="author">Arijit&nbsp;Khan</span>&nbsp;(Nanyang Technological University), and
                    <span class="author">Leroy&nbsp;Lim</span>&nbsp;(Nanyang Technological University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Uncertain, or probabilistic, graphs have been increasingly used to represent noisy linked data in many emerging applications, and have recently attracted the attention of the database research community. A fundamental problem on uncertain graphs is the s-t reliability, which measures the probability that a target node t is reachable from a source node s in a probabilistic (or uncertain) graph, i.e., a graph where every edge is assigned a probability of existence. Due to the inherent complexity of the s-t reliability estimation problem(#P-hard), various sampling and indexing based efficient algorithms were proposed in the literature. However, since they have not been thoroughly compared with each other, it is not clear whether the later algorithm outperforms the earlier ones. More importantly, the comparison framework, datasets, and metrics were often not consistent (e.g., different convergence criteria were employed to find the optimal number of samples) across these works. We address this serious concern by re-implementing six state-of-the-art s-t reliability estimation methods in a common system and code base, using several medium and large-scale, real-world graph datasets, identical evaluation metrics, and query workloads. Through our systematic and in-depth analysis of experimental results, we report surprising findings, such as many follow-up algorithms can actually be several orders of magnitude inefficient, less accurate, and more memory intensive compared to the ones that were proposed earlier. We conclude by discussing our recommendations on the road ahead.
                </span>

            </p>

            <p class="schedule-item" data-id="1161">
                <strong class="schedule-item-title" data-num="18.4">Motivo: Fast Motif Counting via Succinct Color Coding and Adaptive Sampling</strong>
                <span class="schedule-item-people">
                    <span class="author">Marco&nbsp;Bressan</span>&nbsp;(Sapienza University of Rome),
                    <span class="author">Stefano&nbsp;Leucci</span>&nbsp;(MPI-INF), and
                    <span class="author">Alessandro&nbsp;Panconesi</span>&nbsp;(Sapienza University of Rome)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The randomized technique of color coding is behind state-of-the-art algorithms for estimating graph motif counts. Those algorithms, however, are not yet capable of scaling well to very large graphs with billions of edges. In this paper we develop novel tools for the "motif counting via color coding" framework. As a result, our new algorithm, motivo, scales to much larger graphs while at the same time providing more accurate motif counts than ever before. This is achieved thanks to two types of improvements. First, we design new succinct data structures for fast color coding operations, and a biased coloring trick that trades accuracy versus resource usage. These optimizations drastically reduce the resource requirements of color coding. Second, we develop an adaptive motif sampling strategy, based on a fractional set cover problem, that breaks the additive approximation barrier of standard sampling. This gives multiplicative approximations for all motifs at once, allowing us to count not only the most frequent motifs but also extremely rare ones. To give an idea of the improvements, in 40 minutes motivo counts 7-nodes motifs on a graph with 65M nodes and 1.8B edges; this is 30 and 500 times larger than the state of the art, respectively in terms of nodes and edges. On the accuracy side, in one hour motivo produces accurate counts of ≈10.000 distinct 8-node motifs on graphs where state-of-the-art algorithms fail even to find the second most frequent motif. Our method requires just a high-end desktop machine. These results show how color coding can bring motif mining to the realm of truly massive graphs using only ordinary hardware.
                </span>

            </p>

            <p class="schedule-item" data-id="1128">
                <strong class="schedule-item-title" data-num="18.5">Querying Shortest Paths on Time Dependent Road Networks</strong>
                <span class="schedule-item-people">
                    <span class="author">Yong&nbsp;Wang</span>&nbsp;(Tsinghua University),
                    <span class="author">Guoliang&nbsp;Li</span>&nbsp;(Tsinghua University), and
                    <span class="author">Nan&nbsp;Tang</span>&nbsp;(Qatar Computing Research Institute, HBKU)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    For real-world time dependent road networks (TDRNs), answering shortest path-based route queries and plans in real-time is highly desirable by many industrial applications. Unfortunately, traditional (Dijkstra- or A*-like) algorithms are computationally expensive for such tasks on TDRNs. Naturally, indexes are needed to meet the real-time constraint required by real applications. In this paper, we propose a novel height-balanced tree-structured index, called TD-G-tree, which supports fast route queries over TDRNs. The key idea is to use hierarchical graph partitioning to split a road network into hierarchical partitions. This will produce a balanced tree, where each tree node corresponds to a partition and each parent-child relationship corresponds to a partition and its sub-partition. We then compute and index time dependent shortest paths (TDSPs) only for borders (i.e., vertices whose edges are cut by a partition). Based on TD-G-tree, we devise efficient algorithms to support TDSP queries, as well as time-interval based route planning, for computing optimal solutions through dynamic programming and chronological divide-and-conquer. Extensive experiments on real-world datasets show that our method significantly outperforms existing approaches.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_21">
                <span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Research Session 21: Privacy and Security</strong>
                <span class="schedule-chair">Chaired by <em>Ashwin Machanavajjhala</em> (Duke University, USA) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="685">
                <strong class="schedule-item-title" data-num="21.1">A Comparative Evaluation of Order-Revealing Encryption Schemes and Secure Range-Query Protocols</strong>
                <span class="schedule-item-people">
                    <span class="author">Dmytro&nbsp;Bogatov</span>&nbsp;(Boston University),
                    <span class="author">George&nbsp;Kollios</span>&nbsp;(Boston University), and
                    <span class="author">Leonid&nbsp;Reyzin</span>&nbsp;(Boston University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Database query evaluation over encrypted data can allow database users to maintain the privacy of their data while outsourcing data processing. Order-Preserving Encryption (OPE) and Order-Revealing Encryption (ORE) were designed to enable efficient query execution, but provide only partial privacy. More private protocols, based on Searchable Symmetric Encryption (SSE), Oblivious RAM (ORAM) or custom encrypted data structures, have also been designed. In this paper, we develop a framework to provide the first comprehensive comparison among a number of range query protocols that ensure varying levels of privacy of user data. We evaluate five ORE-based and five generic range query protocols. We analyze and compare them both theoretically and experimentally and measure their performance over database indexing and query evaluation. We report not only execution time but also I/O performance, communication amount, and usage of cryptographic primitive operations. Our comparison reveals some interesting insights concerning the relative security and performance of these approaches in database settings.
                </span>

            </p>

            <p class="schedule-item" data-id="1068">
                <strong class="schedule-item-title" data-num="21.2">Obscure: Information-Theoretic Oblivious and Verifiable Aggregation Queries</strong>
                <span class="schedule-item-people">
                    <span class="author">Peeyush&nbsp;Gupta</span>&nbsp;(UC Irvine),
                    <span class="author">Yin&nbsp;Li</span>&nbsp;(Xinyang Normal University),
                    <span class="author">Sharad&nbsp;Mehrotra</span>&nbsp;(UC Irvine),
                    <span class="author">Nisha&nbsp;Panwar</span>&nbsp;(UC Irvine),
                    <span class="author">Shantanu&nbsp;Sharma</span>&nbsp;(UC Irvine), and
                    <span class="author">Sumaya&nbsp;Almanee</span>&nbsp;(UC Irvine)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Despite extensive research on cryptography, secure and efficient query processing over outsourced data remains an open challenge. We develop communication-efficient and information-theoretically secure algorithms for privacy-preserving aggregation queries using multi-party computation (MPC). Specifically, query processing techniques over secret-shared data outsourced by single or multiple database owners are developed. These algorithms allow a user to execute queries on the secret-shared database and also prevent the network and the (adversarial) clouds to learn the user's queries, results, or the database. We further develop (non-mandatory) privacy-preserving result verification algorithms that detect malicious behaviors, and experimentally validate the efficiency of our approach over large datasets, the size of which prior approaches to secret-sharing or MPC systems have not scaled to.
                </span>

            </p>

            <p class="schedule-item" data-id="1101">
                <strong class="schedule-item-title" data-num="21.3">Answering Range Queries Under Local Differential Privacy</strong>
                <span class="schedule-item-people">
                    <span class="author">Graham&nbsp;Cormode</span>&nbsp;(University of Warwick),
                    <span class="author">Tejas&nbsp;Kulkarni</span>&nbsp;(University Of Warwick), and
                    <span class="author">Divesh&nbsp;Srivastava</span>&nbsp;(AT&T Labs Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Counting the fraction of a population having an input within a specified interval i.e. a range query, is a fundamental data analysis primitive. Range queries can also be used to compute other core statistics such as quantiles, and to build prediction models. However, frequently the data is subject to privacy concerns when it is drawn from individuals, and relates for example to their financial, health, religious or political status. In this paper, we introduce and analyze methods to support range queries under the local variant of differential privacy [23], an emerging standard for privacy-preserving data analysis. The local model requires that each user releases a noisy view of her private data under a privacy guarantee. While many works address the problem of range queries in the trusted aggregator setting, this problem has not been addressed specifically under untrusted aggregation (local DP) model even though many primitives have been developed recently for estimating a discrete distribution. We describe and analyze two classes of approaches for range queries, based on hierarchical histograms and the Haar wavelet transform. We show that both have strong theoretical accuracy guarantees on variance. In practice, both methods are fast and require minimal computation and communication resources. Our experiments show that the wavelet approach is most accurate in high privacy settings, while the hierarchical approach dominates for weaker privacy requirements.
                </span>

            </p>

            <p class="schedule-item" data-id="1137">
                <strong class="schedule-item-title" data-num="21.4">PrivateSQL: A Differentially Private SQL Query Engine</strong>
                <span class="schedule-item-people">
                    <span class="author">Ios&nbsp;Kotsogiannis</span>&nbsp;(Duke University),
                    <span class="author">Yuchao&nbsp;Tao</span>&nbsp;(Duke University),
                    <span class="author">Xi&nbsp;He</span>&nbsp;(University of Waterloo),
                    <span class="author">Maryam&nbsp;Fanaeepour</span>&nbsp;(Duke University),
                    <span class="author">Ashwin&nbsp;Machanavajjhala</span>&nbsp;(Duke University),
                    <span class="author">Michael&nbsp;Hay</span>&nbsp;(Colgate University), and
                    <span class="author">Gerome&nbsp;Miklau</span>&nbsp;(University of Massachusetts Amherst)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Differential privacy is considered a de facto standard for private data analysis. However, the definition and much of the supporting literature applies to flat tables. While there exist variants of the definition and specialized algorithms for specific types of relational data (e.g. graphs), there isn't a general privacy definition for multi-relational schemas with constraints, and no system that permits accurate differentially private answering of SQL queries while imposing a fixed privacy budget across all queries posed by the analyst. This work presents PrivateSQL, a first-of-its-kind end-to-end differentially private relational database system. PrivateSQL allows an analyst to query data stored in a standard database management system using a rich class of SQL counting queries. PrivateSQL adopts a novel generalization of differential privacy to multi-relational data that takes into account constraints in the schema like foreign keys, and allows the data owner to flexibly specify entities in the schema that need privacy. PrivateSQL ensures a fixed privacy loss across all the queries posed by the analyst by answering queries on private synopses generated from several views over the base relation that are tuned to have low error on a representative query workload. We experimentally evaluate PrivateSQL on a real-world dataset and a workload of more than 3,600 queries. We show that for 50% of the queries PrivateSQL offers at least 1,000x better error rates than solutions adapted from prior work.
                </span>

            </p>

            <p class="schedule-item" data-id="1162">
                <strong class="schedule-item-title" data-num="21.5">Arx: An Encrypted Database using Semantically Secure Encryption</strong>
                <span class="schedule-item-people">
                    <span class="author">Rishabh&nbsp;Poddar</span>&nbsp;(UC Berkeley),
                    <span class="author">Tobias&nbsp;Boelter</span>&nbsp;(UC Berkeley), and
                    <span class="author">Raluca&nbsp;Ada&nbsp;Popa</span>&nbsp;(UC Berkeley)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In recent years, encrypted databases have emerged as a promising direction that provides data confidentiality without sacrificing functionality: queries are executed on encrypted data. However, many practical proposals rely on a set of weak encryption schemes that have been shown to leak sensitive data. In this paper, we propose Arx, a practical and functionally rich database system that encrypts the data only with semantically secure encryption schemes. We show that Arx supports real applications such as ShareLaTeX with a modest performance overhead.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_22">
                <span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Research Session 22: Clustering and Outlier Detection</strong>
                <span class="schedule-chair">Chaired by <em>Ye Yuan</em> (Beijing Institute of Technology, China) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="684">
                <strong class="schedule-item-title" data-num="22.1">Efficient Discovery of Sequence Outlier Patterns</strong>
                <span class="schedule-item-people">
                    <span class="author">Lei&nbsp;Cao</span>&nbsp;(MIT),
                    <span class="author">Yizhou&nbsp;Yan</span>&nbsp;(Worcester Polytechnic Institute),
                    <span class="author">Samuel&nbsp;Madden</span>&nbsp;(MIT),
                    <span class="author">Elke&nbsp;Rundensteiner</span>&nbsp;(Worcester Polytechnic Institute), and
                    <span class="author">Mathan&nbsp;Gopalsamy</span>&nbsp;(Signify Research, Cambridge, MA USA)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Modern Internet of Things (IoT) applications generate massive amounts of time-stamped data, much of it in the form of discrete, symbolic sequences. In this work, we present a new system called TOP that deTects Outlier Patterns from these sequences. To solve the fundamental limitation of existing pattern mining semantics that miss outlier patterns hidden inside of larger frequent patterns, TOP offers new pattern semantics based on contextual patterns that distinguish the independent occurrence of a pattern from its occurrence as part of its super-pattern. We present efficient algorithms for the mining of this new class of contextual patterns. In particular, in contrast to the bottom-up strategy for state-of-the-art pattern mining techniques, our top-down Reduce strategy piggy backs pattern detection with the detection of the context in which a pattern occurs. Our approach achieves linear time complexity in the length of the input sequence. Effective optimization techniques such as context-driven search space pruning and inverted index-based outlier pattern detection are also proposed to further speed up contextual pattern mining. Our experimental evaluation demonstrates the effectiveness of TOP at capturing meaningful outlier patterns in several real-world IoT use cases. We also demonstrate the efficiency of TOP, showing it to be up to 2 orders of magnitude faster than adapting state-of-the-art mining to produce this new class of contextual outlier patterns, allowing us to scale outlier pattern mining to large sequence datasets.
                </span>

            </p>

            <p class="schedule-item" data-id="1132">
                <strong class="schedule-item-title" data-num="22.2">NETS: Extremely Fast Outlier Detection from a Data Stream via Set-Based Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Susik&nbsp;Yoon</span>&nbsp;(KAIST),
                    <span class="author">Jae-Gil&nbsp;Lee</span>&nbsp;(KAIST), and
                    <span class="author">Byung&nbsp;Suk&nbsp;Lee</span>&nbsp;(University of Vermont)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    This paper addresses the problem of efficiently detecting outliers from a data stream as old data points expire from and new data points enter the window incrementally. The proposed method is based on a newly discovered characteristic of a data stream that the change in the locations of data points in the data space is typically very insignificant. This observation has led to the finding that the existing distance-based outlier detection algorithms perform excessive unnecessary computations that are repetitive and/or canceling out the effects. Thus, in this paper, we propose a novel set-based approach to detecting outliers, whereby data points at similar locations are grouped and the detection of outliers or inliers is handled at the group level. Specifically, a new algorithm NETS is proposed to achieve a remarkable performance improvement by realizing set-based early identification of outliers or inliers and taking advantage of the "net effect" between expired and new data points. Additionally, NETS is capable of achieving the same efficiency even for a high-dimensional data stream through two-level dimensional filtering. Comprehensive experiments using six real-world data streams show 5 to 25 times faster processing time than state-of-the-art algorithms with comparable memory consumption. We assert that NETS opens a new possibility to real-time data stream outlier detection.
                </span>

            </p>

            <p class="schedule-item" data-id="569">
                <strong class="schedule-item-title" data-num="22.3">Solving k-center Clustering (with Outliers) in MapReduce and Streaming, almost as Accurately as Sequentially.</strong>
                <span class="schedule-item-people">
                    <span class="author">Matteo&nbsp;Ceccarello</span>&nbsp;(IT University of Copenhagen),
                    <span class="author">Andrea&nbsp;Pietracaprina</span>&nbsp;(University of Padova), and
                    <span class="author">Geppino&nbsp;Pucci</span>&nbsp;(University of Padova)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Center-based clustering is a fundamental primitive for data analysis and becomes very challenging for large datasets. In this paper, we focus on the popular k-center variant which, given a set S of points from some metric space and a parameter k<|S|, requires to identify a subset of k centers in S minimizing the maximum distance of any point of S from its closest center. A more general formulation, introduced to deal with noisy datasets, features a further parameter z and allows up to z points of S (outliers) to be disregarded when computing the maximum distance from the centers. We present coreset-based 2-round MapReduce algorithms for the above two formulations of the problem, and a 1-pass Streaming algorithm for the case with outliers. For any fixed ϵ>0, the algorithms yield solutions whose approximation ratios are a mere additive term ϵ away from those achievable by the best known polynomial-time sequential algorithms, a result that substantially improves upon the state of the art. Our algorithms are rather simple and adapt to the intrinsic complexity of the dataset, captured by the doubling dimension D of the metric space. Specifically, our analysis shows that the algorithms become very space-efficient for the important case of small (constant) D. These theoretical results are complemented with a set of experiments on real-world and synthetic datasets of up to over a billion points, which show that our algorithms yield better quality solutions over the state of the art while featuring excellent scalability, and that they also lend themselves to sequential implementations much faster than existing ones.
                </span>

            </p>

            <p class="schedule-item" data-id="501">
                <strong class="schedule-item-title" data-num="22.4">Efficient and Effective Algorithms for Clustering Uncertain Graphs</strong>
                <span class="schedule-item-people">
                    <span class="author">Kai&nbsp;Han</span>&nbsp;(University of Science and Technology of China),
                    <span class="author">Fei&nbsp;Gui</span>&nbsp;(University of Science and Technology of China),
                    <span class="author">Xiaokui&nbsp;Xiao</span>&nbsp;(National University of Singapore),
                    <span class="author">Jing&nbsp;Tang</span>&nbsp;(National University of Singapore),
                    <span class="author">Yuntian&nbsp;He</span>&nbsp;(University of Science and Technology of China),
                    <span class="author">Zongmai&nbsp;Cao</span>&nbsp;(University of Science and Technology of China), and
                    <span class="author">He&nbsp;Huang</span>&nbsp;(Soochow University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We consider the edge uncertainty in an undirected graph and study the k-median (resp. k-center) problems, where the goal is to partition the graph nodes into k clusters such that the average (resp. minimum) connection probability between each node and its cluster's center is maximized. We analyze the hardness of these problems, and propose algorithms that provide considerably improved approximation guarantees than the existing studies do. Specifically, our algorithms offer (1 - 1/e)-approximations for the k-median problem and (OPT_k^c)-approximations for the k-center problem, where OPT_k^c is the optimal objective function value for k-center. In addition, our algorithms incorporate several non-trivial optimizations that significantly enhance their practical efficiency. Extensive experimental results demonstrate that our algorithms considerably outperform the existing methods on both computation efficiency and the quality of clustering results.
                </span>

            </p>

            <p class="schedule-item" data-id="775">
                <strong class="schedule-item-title" data-num="22.5">k/2-hop: Fast Mining of Convoy Patterns With Effective Pruning</strong>
                <span class="schedule-item-people">
                    <span class="author">Faisal&nbsp;Moeen&nbsp;Orakzai</span>&nbsp;(ULB),
                    <span class="author">Toon&nbsp;Calders</span>&nbsp;(Universiteit Antwerpen), and
                    <span class="author">Torben&nbsp;Bach&nbsp;Pedersen</span>&nbsp;(Aalborg University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the increase of devices equipped with location sensors, mining spatio-temporal data for interesting behavioral patterns has gained attention in recent years. One of such well-known patterns is the convoy pattern which can be used, e.g., to find groups of people moving together in public transport or to prevent traffic jams. A convoy consists of at least m objects moving together for at least k consecutive time instants where m and k are user-defined parameters. Convoy mining is an expensive task and existing sequential algorithms do not scale to real-life dataset sizes. Existing sequential as well as parallel algorithms require a complex set of data-dependent parameters which are hard to set and tune. Therefore, in this paper, we propose a new fast exact sequential convoy pattern mining algorithm "k/2-hop" that is free of data-dependent parameters. The proposed algorithm processes the data corresponding to a few specific key timestamps at each step and quickly prunes objects with no possibility of forming a convoy. Thus, only a very small portion of the complete dataset is considered for mining convoys. Our experimental results show that k/2-hop outperforms existing sequential as well as parallel convoy pattern mining algorithms by orders of magnitude, and scales to larger datasets which existing algorithms fail on.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_23">
                <span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Research Session 23: Data Integration</strong>
                <span class="schedule-chair">Chaired by <em>Paolo Papotti</em> (Eurecom, France) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1150">
                <strong class="schedule-item-title" data-num="23.1">Rewriting of Plain SO Tgds into Nested Tgds</strong>
                <span class="schedule-item-people">
                    <span class="author">Rihan&nbsp;Hai</span>&nbsp;(RWTH Aachen University) and
                    <span class="author">Christoph&nbsp;Quix</span>&nbsp;(Hochschule Niederrhein & Fraunhofer FIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Schema mappings express the relationships between sources in data interoperability scenarios and can be expressed in various formalisms. Source-to-target tuple-generating dependencies (s-t tgds) can be easily used for data transformation or query rewriting tasks. Second-order tgds (SO tgds) are more expressive as they can also represent the composition and inversion of s-t tgds. Yet, the expressive power of SO tgds comes with the problem of undecidability for some reasoning tasks. Nested tgds and plain SO tgds are mapping languages that are between s-t tgds and SO tgds in terms of expressivity, and their properties have been studied in the recent years. Nested tgds are less expressive than plain SO tgds, but the logical equivalence problem for nested tgds is decidable. However, a detailed characterization of plain SO tgds that have an equivalent nested tgd is missing. In this paper, we present an algorithmic solution for translating plain SO tgds into nested tgds. The algorithm computes one or more nested tgds, if a given plain SO tgd is rewritable. Furthermore, we are able to give a detailed characterization of those plain SO tgds for which an equivalent nested tgd exists, based on the structural properties of the source predicates and Skolem functions in the plain SO tgd. In the evaluation, we show that our algorithm covers a larger subset of plain SO tgds than previous approaches and that a rewriting can be computed efficiently although the algorithm has the exponential complexity.
                </span>

            </p>

            <p class="schedule-item" data-id="1144">
                <strong class="schedule-item-title" data-num="23.2">Embedded Functional Dependencies and Data-completeness Tailored Database Design</strong>
                <span class="schedule-item-people">
                    <span class="author">Ziheng&nbsp;Wei</span>&nbsp;(University of Auckland) and
                    <span class="author">Sebastian&nbsp;Link</span>&nbsp;(University of Auckland)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We establish a robust schema design framework for data with missing values. The framework is based on the new notion of an embedded functional dependency, which is independent of the interpretation of missing values, able to express completeness and integrity requirements on application data, and capable of capturing many redundant data value occurrences. We establish axiomatic and algorithmic foundations for reasoning about embedded functional dependencies. These foundations allow us to establish generalizations of Boyce-Codd and Third normal forms that do not permit any redundancy in any future application data, or minimize their redundancy across dependency-preserving decompositions, respectively. We show how to transform any given schema into application schemata that meet given completeness and integrity requirements and the conditions of the generalized normal forms. Data over those application schemata are therefore fit for purpose by design. Extensive experiments with benchmark schemata and data illustrate our framework, and the effectiveness and efficiency of our algorithms, but also provide quantified insight into database schema design trade-offs.
                </span>

            </p>

            <p class="schedule-item" data-id="1159">
                <strong class="schedule-item-title" data-num="23.3">Distributed Implementations of Dependency Discovery Algorithms</strong>
                <span class="schedule-item-people">
                    <span class="author">Hemant&nbsp;Saxena</span>&nbsp;(University of Waterloo),
                    <span class="author">Lukasz&nbsp;Golab</span>&nbsp;(University of Waterloo), and
                    <span class="author">Ihab&nbsp;F&nbsp;Ilyas</span>&nbsp;(University of Waterloo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We analyze the problem of discovering dependencies from distributed big data. Existing (non-distributed) algorithms focus on minimizing computation by pruning the search space of possible dependencies. However, distributed algorithms must also optimize communication costs, especially in shared-nothing settings, leading to a more complex optimization space. To understand this space, we introduce six primitives shared by existing dependency discovery algorithms, corresponding to data processing steps separated by communication barriers. Through case studies, we show how the primitives allow us to analyze the design space and develop communication-optimized implementations. Finally, we support our analysis with an experimental evaluation on real datasets.
                </span>

            </p>

            <p class="schedule-item" data-id="1163">
                <strong class="schedule-item-title" data-num="23.4">Efficient Knowledge Graph Accuracy Evaluation</strong>
                <span class="schedule-item-people">
                    <span class="author">Junyang&nbsp;Gao</span>&nbsp;(Duke University),
                    <span class="author">Xian&nbsp;Li</span>&nbsp;(Amazon.com),
                    <span class="author">Yifan&nbsp;Ethan&nbsp;Xu</span>&nbsp;(Amazon.com),
                    <span class="author">Bunyamin&nbsp;Sisman</span>&nbsp;(Amazon.com),
                    <span class="author">Xin&nbsp;Luna&nbsp;Dong</span>&nbsp;(Amazon.com), and
                    <span class="author">Jun&nbsp;Yang</span>&nbsp;(Duke University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Estimation of the accuracy of a large-scale knowledge graph (KG) often requires humans to annotate samples from the graph. How to obtain statistically meaningful estimates for accuracy evaluation while keeping human annotation costs low is a problem critical to the development cycle of a KG and its practical applications. Surprisingly,this challenging problem has largely been ignored in prior research. To address the problem, this paper proposes an efficient sampling and evaluation framework, which aims to provide quality accuracy evaluation with strong statistical guarantee while minimizing human efforts. Motivated by the properties of the annotation cost function observed in practice, we propose the use of cluster sampling to reduce the overall cost. We further apply weighted and two-stage sampling as well as stratification for better sampling designs. We also extend our framework to enable efficient incremental evaluation on evolving KG, introducing two solutions based on stratified sampling and a weighted variant of reservoir sampling. Extensive experiments on real-world datasets demonstrate the effectiveness and efficiency of our proposed solution. Compared to baseline approaches, our best solutions can provide up to 60% cost reduction on static KG evaluation and up to 80% cost reduction on evolving KG evaluation, without loss of evaluation quality.
                </span>

            </p>

            <p class="schedule-item" data-id="1120">
                <strong class="schedule-item-title" data-num="23.5">Ontology-based Entity Matching in Attributed Graphs</strong>
                <span class="schedule-item-people">
                    <span class="author">Hanchao&nbsp;Ma</span>&nbsp;(Washington State University),
                    <span class="author">Morteza&nbsp;Alipourlangouri</span>&nbsp;(McMaster University, Canada),
                    <span class="author">Yinghui&nbsp;Wu</span>&nbsp;(Washington State University),
                    <span class="author">Fei&nbsp;Chiang</span>&nbsp;(McMaster University), and
                    <span class="author">Jiaxing&nbsp;Pi</span>&nbsp;(Siemens Corporate Technology)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Keys for graphs incorporate the topology and value constraints needed to uniquely identify entities in a graph. They have been studied to support object identification, knowledge fusion, and social network reconciliation. Existing key constraints identify entities as the matches of a graph pattern by subgraph isomorphism, which enforce label equality on node types. These constraints can be too restrictive to characterize structures and node labels that are syntactically different but semantically equivalent. We propose a new class of key constraints, Ontological Graph Keys (OGKs) that extend conventional graph keys by ontological subgraph matching between entity labels and an external ontology. We show that the implication and validation problems for OGKs are each NP-complete. To reduce the entity matching cost, we also provide an algorithm to compute a minimal cover for OGKs. We then study the entity matching problem with OGKs, and a practical variant with a budget on the matching cost. We develop efficient algorithms to perform entity matching based on a (budgeted) Chase procedure. Using real-world graphs, we experimentally verify the efficiency and accuracy of OGK-based entity matching.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_24">
                <span class="schedule-time">14:00 &ndash; 15:30</span><strong class="main-title">Research Session 24: Blockchain</strong>
                <span class="schedule-chair">Chaired by <em>C. Mohan</em> (IBM Research-Almaden, USA) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1139">
                <strong class="schedule-item-title" data-num="24.1">CAPER: A Cross-Application Permissioned Blockchain</strong>
                <span class="schedule-item-people">
                    <span class="author">Mohammad&nbsp;Javad&nbsp;Amiri</span>&nbsp;(University of California, Santa Barbara),
                    <span class="author">Divyakant&nbsp;Agrawal</span>&nbsp;(University of California, Santa Barbara), and
                    <span class="author">Amr&nbsp;El&nbsp;Abbadi</span>&nbsp;(University of California, Santa Barbara)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Despite recent intensive research, existing blockchain systems do not adequately address all the characteristics of distributed applications. In particular, distributed applications collaborate with each other following service level agreements (SLAs) to provide different services. While collaboration between applications, e.g., cross-application transactions, should be visible to all applications, the internal data of each application, e.g, internal transactions, might be confidential. In this paper, we introduce Caper, a permissioned blockchain system to support both internal and cross-application transactions of collaborating distributed applications. In Caper, the blockchain ledger is formed as a directed acyclic graph where each application accesses and maintains only its own view of the ledger including its internal and all cross-application transactions. Caper also introduces three consensus protocols to globally order cross-application transactions between applications with different internal consensus protocols. The experimental results reveal the efficiency of Caper in terms of performance and scalability.
                </span>

            </p>

            <p class="schedule-item winning-paper" data-id="798">
                <strong class="schedule-item-title" title="Awarded Best Paper" data-num="24.2">Fine-Grained, Secure and Efficient Data Provenance on Blockchain Systems</strong>
                <span class="schedule-item-people">
                    <span class="author">Pingcheng&nbsp;Ruan</span>&nbsp;(National University of Singapore),
                    <span class="author">Gang&nbsp;Chen</span>&nbsp;(Zhejiang University),
                    <span class="author">Tien&nbsp;Tuan&nbsp;Anh&nbsp;Dinh</span>&nbsp;(National University of Singapore),
                    <span class="author">Qian&nbsp;Lin</span>&nbsp;(National University of Singapore),
                    <span class="author">Beng&nbsp;Chin&nbsp;Ooi</span>&nbsp;(National University of Singapore), and
                    <span class="author">Meihui&nbsp;Zhang</span>&nbsp;(Beijing Institute of Technology)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The success of Bitcoin and other cryptocurrencies bring enormous interest to blockchains. A blockchain system implements a tamper-evident ledger for recording transactions that modify some global states. The system captures entire evolution history of the states. The management of that history, also known as data provenance or lineage, has been studied extensively in database systems. However, querying data history in existing blockchains can only be done by replaying all transactions. This approach is applicable to large-scale, offline analysis, but is not suitable for online transaction processing. We present LineageChain, a fine-grained, secure and efficient provenance system for blockchains. LineageChain exposes provenance information to smart contracts via simple and elegant interfaces, thereby enabling a new class of blockchain applications whose execution logics depend on provenance information at runtime. LineageChain captures provenance during contract execution, and efficiently stores it in a Merkle tree. LineageChain provides a novel skip list index designed for supporting efficient provenance query processing. We have implemented LineageChain on top of Hyperledger and a blockchain-optimized storage system called ForkBase. Our extensive evaluation of LineageChain demonstrates its benefits to the new class of blockchain applications, its efficient query, and its small storage overhead.
                </span>

            </p>

            <p class="schedule-item" data-id="1151">
                <strong class="schedule-item-title" data-num="24.3">Blockchain Meets Database: Design and Implementation of a Blockchain Relational Database</strong>
                <span class="schedule-item-people">
                    <span class="author">Senthil&nbsp;Nathan</span>&nbsp;(IBM Research - India),
                    <span class="author">Chander&nbsp;Govindarajan</span>&nbsp;(IBM Research - India),
                    <span class="author">Adarsh&nbsp;Saraf</span>&nbsp;(IBM Research - India),
                    <span class="author">Manish&nbsp;Sethi</span>&nbsp;(IBM Industry Platforms, USA), and
                    <span class="author">Praveen&nbsp;Jayachandran</span>&nbsp;(IBM Research - India)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In this paper, we design and implement the first-ever decentralized replicated relational database with blockchain properties that we term blockchain relational database. We highlight several similarities between features provided by blockchain platforms and a replicated relational database, although they are conceptually different, primarily in their trust model. Motivated by this, we leverage the rich features, decades of research and optimization, and available tooling in relational databases to build a blockchain relational database. We consider a permissioned blockchain model of known, but mutually distrustful organizations each operating their own database instance that are replicas of one another. The replicas execute transactions independently and engage in decentralized consensus to determine the commit order for transactions. We design two approaches, the first where the commit order for transactions is agreed upon prior to executing them, and the second where trans- actions are executed without prior knowledge of the commit order while the ordering happens in parallel. We leverage serializable snapshot isolation (SSI) to guarantee that the replicas across nodes remain consistent and respect the ordering determined by consensus, and devise a new variant of SSI based on block height for the latter approach. We implement our system on PostgreSQL and present detailed performance experiments analyzing both approaches.
                </span>

            </p>

            <p class="schedule-item" data-id="1157">
                <strong class="schedule-item-title" data-num="24.4">BlockchainDB - A Shared Database on Blockchains</strong>
                <span class="schedule-item-people">
                    <span class="author">Muhammad&nbsp;El-Hindi</span>&nbsp;(TU Darmstadt),
                    <span class="author">Carsten&nbsp;Binnig</span>&nbsp;(TU Darmstadt),
                    <span class="author">Arvind&nbsp;Arasu</span>&nbsp;(Microsoft),
                    <span class="author">Donald&nbsp;Kossmann</span>&nbsp;(Microsoft Research), and
                    <span class="author">Ravi&nbsp;Ramamurthy</span>&nbsp;(Microsoft)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In this paper we present BlockchainDB, which leverages blockchains as a storage layer and introduces a database layer on top that extends blockchains by classical data management techniques (e.g., sharding) as well as a standardized query interface to facilitate the adoption of blockchains for data sharing use cases. We show that by introducing the additional database layer, we are able to improve the performance and scalability when using blockchains for data sharing and also massively decrease the complexity for organizations intending to use blockchains for data sharing.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_25">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 25: Spatial Data</strong>
                <span class="schedule-chair">Chaired by <em>Vincent Oria</em> (NJIT, USA) at <em>Santa Anita</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1141">
                <strong class="schedule-item-title" data-num="25.1">Finding Attribute-Aware Similar Region for Data Analysis</strong>
                <span class="schedule-item-people">
                    <span class="author">Kaiyu&nbsp;Feng</span>&nbsp;(Nanyang Technological University),
                    <span class="author">Gao&nbsp;Cong</span>&nbsp;(Nanyang Technological University),
                    <span class="author">Christian&nbsp;S&nbsp;Jensen</span>&nbsp;(Aalborg University), and
                    <span class="author">Tao&nbsp;Guo</span>&nbsp;(Google)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the proliferation of mobile devices and location-based services, increasingly massive volumes of geo-tagged data are becoming available. This data typically also contains non-location information. We study how to use such information to characterize a region and then how to find a region of the same size and with the most similar characteristics. This functionality enables a user to identify regions that share characteristics with a user-supplied region that the user is familiar with and likes. More specifically, we formalize and study a new problem called the attribute-aware similar region search (ASRS) problem. We first define so-called composite aggregators that are able to express aspects of interest in terms of the information associated with a user-supplied region. When applied to a region, an aggregator captures the region's relevant characteristics. Next, given a query region and a composite aggregator, we propose a novel algorithm called DS-Search to find the most similar region of the same size. Unlike any previous work on region search, DS-Search repeatedly discretizes and splits regions until an split region either satisfies a drop condition or it is guaranteed to not contribute to the result. In addition, we extend DS-Search to solve the ASRS problem approximately. Finally, we report on extensive empirical studies that offer insight into the efficiency and effectiveness of the paper's proposals.
                </span>

            </p>

            <p class="schedule-item" data-id="1098">
                <strong class="schedule-item-title" data-num="25.2">Ridesharing: Simulator, Benchmark, and Evaluation</strong>
                <span class="schedule-item-people">
                    <span class="author">James&nbsp;J&nbsp;Pan</span>&nbsp;(Tsinghua University),
                    <span class="author">Guoliang&nbsp;Li</span>&nbsp;(Tsinghua University), and
                    <span class="author">Juntao&nbsp;Hu</span>&nbsp;(Beihang University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Ridesharing is becoming a popular mode of transportation with profound effects on the industry. Recent algorithms for vehicle-to-customer matching have been developed; yet cross-study evaluations of their performance and applicability to real-world ridesharing are lacking. Evaluation is complicated by the online and real-time nature of the ridesharing problem. In this paper, we develop a simulator for evaluating ridesharing algorithms, and we provide a set of benchmarks to test a wide range of scenarios encountered in the real world. These scenarios include different road networks, different numbers of vehicles, larger scales of customer requests, and others. We apply the benchmarks to several state-of-the-art search and join based ridesharing algorithms to demonstrate the usefulness of the simulator and the benchmarks. We find quickly-computable heuristics outperforming other more complex methods, primarily due to faster computation speed. Our work points the direction for designing and evaluating future ridesharing algorithms.
                </span>

            </p>

            <p class="schedule-item" data-id="345">
                <strong class="schedule-item-title" data-num="25.3">The Maximum Trajectory Coverage Query in Spatial Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Mohammed&nbsp;Eunus&nbsp;Ali</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Shadman&nbsp;Saqib&nbsp;Eusuf</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Kaysar&nbsp;Abdullah</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Farhana&nbsp;M&nbsp;Choudhury</span>&nbsp;(RMIT University),
                    <span class="author">J.&nbsp;Shane&nbsp;Culpepper</span>&nbsp;(RMIT University), and
                    <span class="author">Timos&nbsp;Sellis</span>&nbsp;(Swinburne University of Technology)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    With the widespread use of GPS-enabled mobile devices, an unprecedented amount of trajectory data has become available from various sources such as Bikely, GPS-wayPoints, and Uber. The rise of smart transportation services and recent break-throughs in autonomous vehicles increase our reliance on trajectory data in a wide variety of applications. Supporting these services in emerging platforms requires more efficient query processing in trajectory databases. In this paper, we propose two new coverage queries for trajectory databases: (i) k Best Facility Trajectory Search (kBFT); and (ii) k Best Coverage Facility Trajectory Search (kBCovFT). We propose a novel index structure, the Trajectory Quadtree (TQ-tree) that utilizes a quadtree to hierarchically organize trajectories into different nodes, and then applies a z-ordering to further organize the trajectories by spatial locality inside each node. This structure is highly effective in pruning the trajectory search space, which is of independent interest. By exploiting the TQ-tree, we develop a divide-and-conquer approach to efficiently process a kBFT query. To solve the kBCovFT, which is a non-submodular NP-hard problem, we propose a greedy approximation. We evaluate our algorithms through an extensive experimental study on several real datasets, and demonstrate that our algorithms outperform baselines by two to three orders of magnitude.
                </span>

            </p>

            <p class="schedule-item" data-id="300">
                <strong class="schedule-item-title" data-num="25.4">The Flexible Socio Spatial Group Queries</strong>
                <span class="schedule-item-people">
                    <span class="author">Bishwamittra&nbsp;Ghosh</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Mohammed&nbsp;Eunus&nbsp;Ali</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Farhana&nbsp;M.&nbsp;Choudhury</span>&nbsp;(RMIT University and University of Melbourne),
                    <span class="author">Sajid&nbsp;Hasan</span>&nbsp;(Bangladesh University of Engineering and Technology (BUET)),
                    <span class="author">Timos&nbsp;Sellis</span>&nbsp;(Swinburne University of Technology), and
                    <span class="author">Jianxin&nbsp;Li</span>&nbsp;(The University of Western Australia)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A socio spatial group query finds a group of users who possess strong social connections with each other and have the minimum aggregate spatial distance to a meeting point. Existing studies limit to either finding the best group of a fixed size for a single meeting location, or a single group of a fixed size w.r.t. multiple locations. However, it is highly desirable to consider multiple locations in a real-life scenario in order to organize impromptu activities of groups of various sizes. In this paper, we propose Top k Flexible Socio Spatial Group Query (Top k-FSSGQ) to find the top k groups w.r.t. multiple POIs where each group follows the minimum social connectivity constraints. We devise a ranking function to measure the group score by combining social closeness, spatial distance, and group size, which provides the flexibility of choosing groups of different sizes under different constraints. To effectively process the Top k-FSSGQ, we first develop an Exact approach that ensures early termination of the search based on the derived upper bounds. We prove that the problem is NP-hard, hence we first present a heuristic based approximation algorithm to effectively select members in intermediate solution groups based on the social connectivity of the users. Later we design a Fast Approximate approach based on the relaxed social and spatial bounds, and connectivity constraint heuristic. Experimental studies have verified the effectiveness and efficiency of our proposed approaches on real datasets.
                </span>

            </p>

            <p class="schedule-item" data-id="1114">
                <strong class="schedule-item-title" data-num="25.5">Creating Top Ranking Options in the Continuous Option and Preference Space</strong>
                <span class="schedule-item-people">
                    <span class="author">Bo&nbsp;Tang</span>&nbsp;(Southern University of Science and Technology),
                    <span class="author">Kyriakos&nbsp;Mouratidis</span>&nbsp;(Singapore Management University),
                    <span class="author">Man&nbsp;Lung&nbsp;Yiu</span>&nbsp;(Hong Kong Polytechnic University), and
                    <span class="author">Zhenyu&nbsp;Chen</span>&nbsp;(Southern University of Science and Technology)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Top-k queries are extensively used to retrieve the k most relevant options (e.g., products, services, accommodation alternatives, etc) based on a weighted scoring function that captures user preferences. In this paper, we take the viewpoint of a business owner who plans to introduce a new option to the market, with a certain type of clientele in mind. Given a target region in the consumer spectrum, we determine what attribute values the new option should have, so that it ranks among the top-k for any user in that region. Our methodology can also be used to improve an existing option, at the minimum modification cost, so that it ranks consistently high for an intended type of customers. This is the first work on competitive option placement where no distinct user(s) are targeted, but a general clientele type, i.e., a continuum of possible preferences. Here also lies our main challenge (and contribution), i.e., dealing with the interplay between two continuous spaces: the targeted region in the preference spectrum, and the option domain (where the new option will be placed). At the core of our methodology lies a novel and powerful interlinking between the two spaces. Our algorithms offer exact answers in practical response times, even for the largest of the standard benchmark datasets.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_26">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 26: Transaction Processing II</strong>
                <span class="schedule-chair">Chaired by <em>Yingjun Wu</em> (IBM Research - Almaden) at <em>San Jose</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="387">
                <strong class="schedule-item-title" data-num="26.1">IPA: Invariant-Preserving Applications for Weakly Consistent Replicated Databases</strong>
                <span class="schedule-item-people">
                    <span class="author">Valter&nbsp;Balegas</span>&nbsp;(NOVA LINCS, FCT, Universidade NOVA de Lisboa),
                    <span class="author">Sérgio&nbsp;Duarte</span>&nbsp;(NOVA LINCS, FCT, Universidade NOVA de Lisboa),
                    <span class="author">Carla&nbsp;Ferreira</span>&nbsp;(NOVA LINCS, FCT, Universidade NOVA de Lisboa),
                    <span class="author">Rodrigo&nbsp;Rodrigues</span>&nbsp;(INESC-ID & Instituto Superior Técnico, Universidade de Lisboa), and
                    <span class="author">Nuno&nbsp;Preguiça</span>&nbsp;(NOVA LINCS, FCT, Universidade NOVA de Lisboa)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    It is common to use weakly consistent replication to achieve high availability and low latency at a global scale. In this setting, concurrent updates may lead to states where application invariants do not hold. Some systems coordinate the execution of (conflicting) operations to avoid invariant violations, leading to high latency and reduced availability for those operations. This problem is worsened by the difficulty in identifying precisely which operations conflict. In this paper we propose a novel approach to preserve application invariants without coordinating the execution of operations. The approach consists of modifying operations in a way that application invariants are maintained in the presence of concurrent updates. When no conflicting updates occur, the modified operations present their original semantics. Otherwise, we use sensible and deterministic conflict resolution policies that preserve the invariants of the application. To implement this approach, we developed a static analysis, IPA, that identifies conflicting operations and proposes the necessary modifications to operations. Our analysis shows that IPA can avoid invariant violations in many applications, including typical database applications. Our evaluation reveals that the offline static analysis runs fast enough for being used with large applications. The overhead introduced in the modified operations is low and it leads to lower latency and higher throughput when compared with other approaches that enforce invariants.
                </span>

            </p>

            <p class="schedule-item" data-id="433">
                <strong class="schedule-item-title" data-num="26.2">MgCrab: Transaction Crabbing for Live Migration in Deterministic Database Systems</strong>
                <span class="schedule-item-people">
                    <span class="author">Yu-Shan&nbsp;Lin</span>&nbsp;(National Tsing Hua University),
                    <span class="author">Shao-Kan&nbsp;Pi</span>&nbsp;(National Tsing Hua University),
                    <span class="author">Meng-Kai&nbsp;Liao</span>&nbsp;(National Tsing Hua University),
                    <span class="author">Ching&nbsp;Tsai</span>&nbsp;(National Tsing Hua University),
                    <span class="author">Aaron&nbsp;J&nbsp;Elmore</span>&nbsp;(University of Chicago), and
                    <span class="author">Shan-Hung&nbsp;Wu</span>&nbsp;(National Tsing Hua University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Recent deterministic database systems have achieved high scalability and high availability in distributed environments given OLTP workloads. However, modern OLTP applications usually have changing workloads or access patterns, so how to make the resource provisioning elastic to the changing workloads becomes an important design goal for a deterministic database system. Live migration, which moves the specified data from a source machine to a destination node while continuously serving the incoming transactions, is a key technique required for the elasticity. In this paper, we present MgCrab, a live migration technique for a deterministic database system, that leverages the determinism to maintain the consistency of data on the source and destination nodes at very low cost during a migration period. We implement MgCrab on an open-source database system. Extensive experiments were conducted and the results demonstrate the effectiveness of MgCrab.
                </span>

            </p>

            <p class="schedule-item" data-id="1133">
                <strong class="schedule-item-title" data-num="26.3">STAR: Scaling Transactions through Asymmetric Replication</strong>
                <span class="schedule-item-people">
                    <span class="author">Yi&nbsp;Lu</span>&nbsp;(MIT),
                    <span class="author">Xiangyao&nbsp;Yu</span>&nbsp;(MIT), and
                    <span class="author">Samuel&nbsp;Madden</span>&nbsp;(MIT)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    In this paper, we present STAR, a new distributed in-memory database with asymmetric replication. By employing a single-node non-partitioned architecture for some replicas and a partitioned architecture for other replicas, STAR is able to efficiently run both highly partitionable workloads and workloads that involve cross-partition transactions. The key idea is a new phase-switching algorithm where the execution of single-partition and cross-partition transactions is separated. In the partitioned phase, single-partition transactions are run on multiple machines in parallel to exploit more concurrency. In the single-master phase, mastership for the entire database is switched to a single designated master node, which can execute these transactions without the use of expensive coordination protocols like two-phase commit. Because the master node has a full copy of the database, this phase-switching can be done at negligible cost. Our experiments on two popular benchmarks (YCSB and TPC-C) show that high availability via replication can coexist with fast serializable transaction execution in distributed in-memory databases, with STAR outperforming systems that employ conventional concurrency control and replication algorithms by up to one order of magnitude.
                </span>

            </p>

            <p class="schedule-item" data-id="431">
                <strong class="schedule-item-title" data-num="26.4">Adaptive Optimistic Concurrency Control for Heterogeneous Workloads</strong>
                <span class="schedule-item-people">
                    <span class="author">Jinwei&nbsp;Guo</span>&nbsp;(East China Normal University),
                    <span class="author">Peng&nbsp;Cai</span>&nbsp;(East China Normal University),
                    <span class="author">Jiahao&nbsp;Wang</span>&nbsp;(East China Normal University),
                    <span class="author">Weining&nbsp;Qian</span>&nbsp;(East China Normal University), and
                    <span class="author">Aoying&nbsp;Zhou</span>&nbsp;(East China Normal University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Optimistic concurrency control (OCC) protocols validate whether a transaction has conflicts with other concurrent transactions after this transaction completes its execution. In this work, we demonstrate that the validation phase has a great influence on the performance of modern in-memory database systems, especially under heterogeneous workloads. The cost of validating operations in a transaction is determined by two main factors. The first factor is the operation type. An OCC protocol would take much less cost on validating a single-record read operation than validating a key-range scan operation. The second factor is the workload type. Existing schemes in OCC variants for validating key-range scan perform differently under various workloads. Although various validation schemes share the same goal of guaranteeing a transaction schedule to be serializable, there are remarkable differences between the costs they introduced. These observations motivate us to design an optimistic concurrency control which can choose a low-cost validation scheme at runtime, referred to as adaptive optimistic concurrency control (AOCC). First, at transaction-level granularity, AOCC can assign a validation method to a transaction according to the features of its operations. Furthermore, for each operation in a transaction, the validation method is selected according to not only the number of accessed records but also the instant characteristics of workloads. Experimental results show that AOCC has good performance and scalability under heterogeneous workloads mixed with point accesses and predicate queries.
                </span>

            </p>

            <p class="schedule-item" data-id="1209">
                <strong class="schedule-item-title" data-num="26.5">Improving Optimistic Concurrency Control Through Transaction Batching and Operation Reordering</strong>
                <span class="schedule-item-people">
                    <span class="author">Bailu&nbsp;Ding</span>&nbsp;(Microsoft Research),
                    <span class="author">Lucja&nbsp;Kot</span>&nbsp;(GrammaTech, Inc), and
                    <span class="author">Johannes&nbsp;Gehrke</span>&nbsp;(Microsoft Corporation)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    OLTP systems can often improve throughput by batching transactions and processing them as a group. Batching has been used for optimizations such as message packing and group commits; however, there is little research on the benefits of a holistic approach to batching across a transaction's entire life cycle. In this paper, we present a framework to incorporate batching at multiple stages of transaction execution for OLTP systems based on optimistic concurrency control. Storage batching enables reordering of transaction reads and writes at the storage layer, reducing conflicts on the same object. Validator batching enables reordering of transactions before validation, reducing conflicts between transactions. Dependencies between transactions make transaction reordering a non-trivial problem, and we propose several efficient and practical algorithms that can be customized to various transaction precedence policies such as reducing tail latency. We also show how to reorder transactions with a thread-aware policy in multi-threaded OLTP architecture without a centralized validator. In-depth experiments on a research prototype, an open-source OLTP system, and a production OLTP system show that our techniques increase transaction throughput by up to 2.2x and reduce their tail latency by up to 71% compared with the start-of-the-art systems on workloads with high data contention.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_27">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 27: Potpourri</strong>
                <span class="schedule-chair">Chaired by <em>Senjuti Basu Roy</em> (NJIT, USA) at <em>San Diego</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1158">
                <strong class="schedule-item-title" data-num="27.1">Efficient Task-Specific Data Valuation for Nearest Neighbor Algorithms</strong>
                <span class="schedule-item-people">
                    <span class="author">Ruoxi&nbsp;Jia</span>&nbsp;(UC Berkeley),
                    <span class="author">David&nbsp;Dao</span>&nbsp;(ETH Zurich),
                    <span class="author">Boxin&nbsp;Wang</span>&nbsp;(Zhejiang University),
                    <span class="author">Frances&nbsp;Ann&nbsp;Hubis</span>&nbsp;(ETH Zurich),
                    <span class="author">Nezihe&nbsp;Merve&nbsp;Gürel</span>&nbsp;(ETH Zurich),
                    <span class="author">Bo&nbsp;Li</span>&nbsp;(University of Illinois at Urbana–Champaign),
                    <span class="author">Ce&nbsp;Zhang</span>&nbsp;(ETH Zurich),
                    <span class="author">Costas&nbsp;J.&nbsp;Spanos</span>&nbsp;(UC Berkeley), and
                    <span class="author">Dawn&nbsp;Song</span>&nbsp;(UC Berkeley)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Given a dataset D containing millions of data points and a data consumer who is willing to pay for X to train a machine learning(ML) model over D, how should we distribute this X to each data point to reflect its "value"? In this paper, we define the "relative value of data" via the Shapley value, as it uniquely possesses properties with appealing real-world interpretations, such as fairness, rationality and decentralizability. For general, bounded utility functions, the Shapley value is known to be challenging to compute: to get Shapley values for all N data points, it requires O(2^N) model evaluations for exact computation and O(NlogN) for (ϵ,δ)-approximation. In this paper, we focus on one popular family of ML models relying on K-nearest neighbors (KNN). The most surprising result is that for unweighted KNN classifiers and regressors, the Shapley value of all N data points can be computed, exactly, in O(NlogN) time - an exponential improvement on computational complexity! Moreover, for (ϵ,δ)-approximation, we are able to develop an algorithm based on Locality Sensitive Hashing (LSH) with only sublinear complexity O(N^h(ϵ,K) logN) when ϵ is not too small and K is not too large. We empirically evaluate our algorithms on up to 10 million data points and even our exact algorithm is up to three orders of magnitude faster than the baseline approximation algorithm. The LSH-based approximation algorithm can accelerate the value calculation process even further. We then extend our algorithm to other scenarios such as (1) weighed KNN classifiers, (2) different data points are clustered by different data curators, and (3) there are data analysts providing computation who also requires proper valuation. Some of these extensions, although also being improved exponentially, are less practical for exact computation (e.g., O(N^K) complexity for weigthed KNN). We thus propose an Monte Carlo approximation algorithm, which is O(N(log N)^2/(log K)^2) times more efficient than the baseline approximation algorithm.
                </span>

            </p>

            <p class="schedule-item" data-id="430">
                <strong class="schedule-item-title" data-num="27.2">An Experimental Evaluation of Garbage Collectors on Big Data Applications</strong>
                <span class="schedule-item-people">
                    <span class="author">Lijie&nbsp;Xu</span>&nbsp;(Chinese Academy of Sciences),
                    <span class="author">Tian&nbsp;Guo</span>&nbsp;(Worcester Polytechnic Institute),
                    <span class="author">Wensheng&nbsp;Dou</span>&nbsp;(Chinese Academy of Sciences),
                    <span class="author">Wei&nbsp;Wang</span>&nbsp;(Chinese Academy of Sciences), and
                    <span class="author">Jun&nbsp;Wei</span>&nbsp;(Chinese Academy of Sciences)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Popular big data frameworks, ranging from Hadoop MapReduce to Spark, rely on garbage-collected languages, such as Java and Scala. Big data applications are especially sensitive to the effectiveness of garbage collection (i.e., GC), because they usually process a large volume of data objects that lead to heavy GC overhead. Lacking in-depth understanding of GC performance has impeded performance improvement in big data applications. In this paper, we conduct the first comprehensive evaluation on three popular garbage collectors, i.e., Parallel, CMS, and G1, using four representative Spark applications. By thoroughly investigating the correlation between these big data applications' memory usage patterns and the collectors' GC patterns, we obtain many findings about GC inefficiencies. We further propose empirical guidelines for application developers, and insightful optimization strategies for designing big-data-friendly garbage collectors.
                </span>

            </p>

            <p class="schedule-item" data-id="1191">
                <strong class="schedule-item-title" data-num="27.3">A Comparative Evaluation of Systems for Scalable Linear Algebra-based Analytics</strong>
                <span class="schedule-item-people">
                    <span class="author">Anthony&nbsp;Thomas</span>&nbsp;(University of California, San Diego) and
                    <span class="author">Arun&nbsp;Kumar</span>&nbsp;(University of California, San Diego)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The growing use of statistical and machine learning (ML) algorithms to analyze large datasets has given rise to new systems to scale such algorithms. But implementing new scalable algorithms in low-level languages is a painful process, especially for enterprise and scientific users. To mitigate this issue, a new breed of systems expose high-level bulk linear algebra (LA) primitives that are scalable. By composing such LA primitives, users can write analysis algorithms in a higher-level language, while the system handles scalability issues. But there is little work on a unified comparative evaluation of the scalability, efficiency, and effectiveness of such "scalable LA systems." We take a major step towards filling this gap. We introduce a suite of LA-specific tests based on our analysis of the data access and communication patterns of LA workloads and their use cases. Using our tests, we perform a comprehensive empirical comparison of a few popular scalable LA systems: MADlib, MLlib, SystemML, ScaLAPACK, SciDB, and TensorFlow using both synthetic data and a large real-world dataset. Our study has revealed several scalability bottlenecks, unusual performance trends, and even bugs in some systems. Our findings have already led to improvements in SystemML, with other systems' developers also expressing interest. All of our code and data scripts are available for download at https://adalabucsd.github.io/slab.html.
                </span>

            </p>

            <p class="schedule-item" data-id="1169">
                <strong class="schedule-item-title" data-num="27.4">GRAIL: Efficient Time-Series Representation Learning</strong>
                <span class="schedule-item-people">
                    <span class="author">John&nbsp;Paparrizos</span>&nbsp;(University of Chicago) and
                    <span class="author">Michael&nbsp;Franklin</span>&nbsp;(University of Chicago)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    The analysis of time series is becoming increasingly prevalent across scientific disciplines and industrial applications. The effectiveness and the scalability of time-series mining techniques critically depend on design choices for three components responsible for (i) representing; (ii) comparing; and (iii) indexing time series. Unfortunately, these components have to date been investigated and developed independently, often resulting in mutually incompatible methods. The lack of a unified approach has hindered progress towards fast and accurate analytics over massive time-series collections. To address this major drawback, we present GRAIL, a generic framework to learn compact time-series representations that preserve the properties of a user-specified comparison function. Given the comparison function, GRAIL (i) extracts landmark time series using clustering; (ii) optimizes necessary parameters; and (iii) exploits approximations for kernel methods to construct representations in linear time and space by expressing each time series as a combination of the landmark time series. We extensively evaluate GRAIL for querying, classification, clustering, sampling, and visualization of time series. For these tasks, methods leveraging GRAIL's representations are significantly faster and at least as accurate as state-of-the-art methods operating over the raw time series. GRAIL shows promise as a new primitive for highly accurate, yet scalable, time-series analysis.
                </span>

            </p>

            <p class="schedule-item" data-id="362">
                <strong class="schedule-item-title" data-num="27.5">ShrinkWrap: Efficient SQL Query Processing in Differentially Private Data Federations</strong>
                <span class="schedule-item-people">
                    <span class="author">Johes&nbsp;Bater</span>&nbsp;(Northwestern University),
                    <span class="author">Xi&nbsp;He</span>&nbsp;(University of Waterloo),
                    <span class="author">William&nbsp;Ehrich</span>&nbsp;(Northwestern University),
                    <span class="author">Ashwin&nbsp;Machanavajjhala</span>&nbsp;(Duke University), and
                    <span class="author">Jennie&nbsp;Rogers</span>&nbsp;(Northwestern University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    A private data federation is a set of autonomous databases that share a unified query interface offering in-situ evaluation of SQL queries over the union of the sensitive data of its members. Owing to privacy concerns, these systems do not have a trusted data collector that can see all their data and their member databases cannot learn about individual records of other engines. Federations currently achieve this goal by evaluating queries obliviously using secure multi-party computation. This hides the intermediate result cardinality of each query operator by exhaustively padding it. With cascades of such operators, this padding accumulates to a blow-up in the output size of each operator and a proportional loss in query performance. Hence, existing private data federations do not scale well to complex SQL queries over large datasets. We introduce Shrinkwrap, a private data federation that offers data owners a differentially private view of the data held by others to improve their performance over oblivious query processing. Shrinkwrap uses computational differential privacy to minimize the padding of intermediate query results, achieving up to a 35X performance improvement over oblivious query processing. When the query needs differentially private output, Shrinkwrap provides a trade-off between result accuracy and query evaluation performance.
                </span>

            </p>


            <div class="schedule-head" id="Research_Session_28">
                <span class="schedule-time">16:00 &ndash; 17:30</span><strong class="main-title">Research Session 28: Query Processing II</strong>
                <span class="schedule-chair">Chaired by <em>Ilaria Bartolini</em> (University of Bologna, Italy) at <em>Emerald Bay</em> room</span> 
            </div>
            
            <p class="schedule-item" data-id="1198">
                <strong class="schedule-item-title" data-num="28.1">A Concave Path to Low-overhead Robust Query Processing</strong>
                <span class="schedule-item-people">
                    <span class="author">Srinivas&nbsp;Karthik</span>&nbsp;(Indian Institute of Science),
                    <span class="author">Jayant&nbsp;R.&nbsp;Haritsa</span>&nbsp;(Indian Institute of Science),
                    <span class="author">Sreyash&nbsp;Kenkre</span>&nbsp;(IBM Research), and
                    <span class="author">Vinayaka&nbsp;Pandit</span>&nbsp;(IBM Research)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    To address the classical selectivity estimation problem in database systems, a radically different query processing technique called PlanBouquet was proposed in 2014. In this approach, the estimation process is completely abandoned and replaced with a calibrated selectivity discovery mechanism. The beneficial outcome is that provable guarantees are obtained on worst-case execution performance, thereby facilitating robust query processing. An improved version of PlanBouquet, called SpillBound (SB), which significantly accelerates the selectivity discovery process, and provides platform-independent performance guarantees, was presented two years ago. Notwithstanding its benefits, a limitation of SpillBound is that its guarantees are predicated on expending enormous preprocessing efforts during query compilation, making it suitable only for canned queries that are invoked repeatedly. In this paper, we address this limitation by leveraging the fact that plan cost functions typically exhibit concave down behavior with regard to predicate selectivities. Specifically, we design FrugalSpillBound, which provably achieves extremely attractive tradeoffs between the performance guarantees and the compilation overheads. For instance, relaxing the performance guarantee by a factor of two typically results in at least two orders of magnitude reduction in the overheads. Further, when empirically evaluated on benchmark OLAP queries, the decrease in overheads is even greater, often more than three orders of magnitude. Therefore, FrugalSpillBound substantively extends robust query processing towards supporting ad-hoc queries.
                </span>

            </p>

            <p class="schedule-item" data-id="1199">
                <strong class="schedule-item-title" data-num="28.2">Interactive Summarization and Exploration of Top Aggregate Query Answers</strong>
                <span class="schedule-item-people">
                    <span class="author">Yuhao&nbsp;Wen</span>&nbsp;(Duke University),
                    <span class="author">Xiaodan&nbsp;Zhu</span>&nbsp;(Duke University),
                    <span class="author">Sudeepa&nbsp;Roy</span>&nbsp;(Duke University), and
                    <span class="author">Jun&nbsp;Yang</span>&nbsp;(Duke University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We present a system for summarization and interactive exploration of high-valued aggregate query answers to make a large set of possible answers more informative to the user. Our system outputs a set of clusters on the high-valued query answers showing their common properties such that the clusters are diverse as much as possible to avoid repeating information, and cover a certain number of top original answers as indicated by the user. Further, the system facilitates interactive exploration of the query answers by helping the user (i) choose combinations of parameters for clustering, (ii) inspect the clusters as well as the elements they contain, and (iii) visualize how changes in parameters affect clustering. We define optimization problems, study their complexity, explore properties of the solutions investigating the semi-lattice structure on the clusters, and propose efficient algorithms and optimizations to achieve these goals. We evaluate our techniques experimentally and discuss our prototype with a graphical user interface that facilitates this interactive exploration. A user study is conducted to evaluate the usability of our approach.
                </span>

            </p>

            <p class="schedule-item" data-id="1202">
                <strong class="schedule-item-title" data-num="28.3">Durable Top-k Queries on Temporal Data</strong>
                <span class="schedule-item-people">
                    <span class="author">Junyang&nbsp;Gao</span>&nbsp;(Duke University),
                    <span class="author">Pankaj&nbsp;K.&nbsp;Agarwal</span>&nbsp;(Duke University), and
                    <span class="author">Jun&nbsp;Yang</span>&nbsp;(Duke University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Many datasets have a temporal dimension and contain a wealth of historical information. When using such data to make decisions, we often want to examine not only the current snapshot of the data but also its history. For example, given a result object of a snapshot query, we can ask for its "durability," or intuitively, how long (or how often) it was valid in the past. This paper considers durable top-k queries, which look for objects whose values were among the top k for at least some fraction of the times during a given interval—e.g., stocks that were among the top 20 most heavily traded for at least 80% of the trading days during the last quarter of 2017. We present a comprehensive suite of techniques for solving this problem, ranging from exact algorithms where k is fixed in advance, to approximate methods that work for any k and are able to exploit workload and data characteristics to improve accuracy while capping index cost. We show that our methods vastly outperform baseline and previous methods using both real and synthetic datasets
                </span>

            </p>

            <p class="schedule-item" data-id="1203">
                <strong class="schedule-item-title" data-num="28.4">Scalable, Variable-Length Similarity Search in Data Series: The ULISSE Approach</strong>
                <span class="schedule-item-people">
                    <span class="author">Michele&nbsp;Linardi</span>&nbsp;(Paris Descartes University) and
                    <span class="author">Themis&nbsp;Palpanas</span>&nbsp;(Paris Descartes University)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    Data series similarity search is an important operation and at the core of several analysis tasks and applications related to data series collections. Despite the fact that data series indexes enable fast similarity search, all existing indexes can only answer queries of a single length (fixed at index construction time), which is a severe limitation. In this work, we propose ULISSE, the first data series index structure designed for answering similarity search queries of variable length. Our contribution is two-fold. First, we introduce a novel representation technique, which effectively and succinctly summarizes multiple sequences of different length (irrespective of Z-normalization). Based on the proposed index, we describe efficient algorithms for approximate and exact similarity search, combining disk based index visits and in-memory sequential scans. We experimentally evaluate our approach using several synthetic and real datasets. The results show that ULISSE is several times (and up to orders of magnitude) more efficient in terms of both space and time cost, when compared to competing approaches.
                </span>

            </p>

            <p class="schedule-item" data-id="1164">
                <strong class="schedule-item-title" data-num="28.5">Optimizing Subgraph Queries by Combining Binary and Worst-Case Optimal Joins</strong>
                <span class="schedule-item-people">
                    <span class="author">Amine&nbsp;Mhedhbi</span>&nbsp;(University of Waterloo) and
                    <span class="author">Semih&nbsp;Salihoglu</span>&nbsp;(University of Waterloo)
                </span>
                <span class="schedule-item-abstract">
                    <a class="schedule-item-action"></a>
                    We study the problem of optimizing subgraph queries using the new worst-case optimal join plans. Worst-case optimal plans evaluate queries by matching one query vertex at a time using multiway intersections. The core problem in optimizing worst-case optimal plans is to pick an ordering of the query vertices to match. We design a cost-based optimizer that (i) picks efficient query vertex orderings for worst-case optimal plans; and (ii) generates hybrid plans that mix traditional binary joins with worst-case optimal style multiway intersections. Our cost metric combines the cost of binary joins with a new cost metric called intersection-cost. The plan space of our optimizer contains plans that are not in the plan spaces based on tree decompositions from prior work. In addition to our optimizer, we describe an adaptive technique that changes the orderings of the worst-case optimal subplans during query execution. We demonstrate the effectiveness of the plans our optimizer picks and the effectiveness of the adaptive technique through extensive experiments. Our optimizer is integrated into the Graphflow DBMS.
                </span>

            </p>


        </div>

    </div>

</section>
<?php
define('PageTitle', "Research Track Papers");
define('PageDescription', "List of accepted research track papers.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Research Track Papers",
  "url": "https://vldb.org/2019/?papers-research",
  "description": "List of accepted research track papers.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://vldb.org/2019/?program",
        "name": "Conference Program"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://vldb.org/2019/?papers-research",
        "name": "Research Track Papers"
      }
    }]
  }
}


</script>